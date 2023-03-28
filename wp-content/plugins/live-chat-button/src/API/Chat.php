<?php

namespace AsanaPlugins\WhatsApp\API;

defined( 'ABSPATH' ) || exit;

use AsanaPlugins\WhatsApp;

class Chat extends BaseController {

	protected $rest_base = 'chat';

	public function register_routes() {
		register_rest_route(
			$this->namespace,
			'/' . $this->rest_base,
			array(
				array(
					'methods'             => \WP_REST_Server::CREATABLE,
					'callback'            => array( $this, 'query' ),
					'permission_callback' => '__return_true',
					'args'                => array(
						'query' => array(
							'description' => __( 'Chat query', 'asnp-easy-whatsapp' ),
							'type'        => 'string',
						),
					),
				),
			)
		);
	}

	public function query( $request ) {
		$query = ! empty( $request['query'] ) ? wp_kses_post( $request['query'] ) : '';
		if ( empty( $query ) ) {
			return new \WP_Error( 'asnp_ewhatsapp_rest_chat_query_empty_query', __( 'Empty query.', 'asnp-easy-whatsapp' ), array( 'status' => 400 ) );
		}

		if ( defined( 'ASNP_CHAT_DEBUG' ) && ASNP_CHAT_DEBUG ) {
			$response = [
				'Hi',
				'How are you?',
				'I\'m ChatGPT developed by OpenAI',
				'How can I help you?',
				'Lorem ipsum dolor sit amet, facer graece tamquam eu pro, cu animal lucilius pro, dicta appareat te vis. Oratio splendide mel no. Usu persecuti suscipiantur comprehensam ut, per ei graeco disputationi. Sit id feugiat mediocrem gubergren, his vitae graeco feugait cu, altera accusamus scripserit in qui. Id fastidii periculis nam, cum solet tempor eu. Legere ceteros sit et, vitae doming meliore in usu, pro denique scriptorem id. Vix in nullam indoctum, eu fabulas oporteat vix.<br>
				Vim mundi dissentias no, mea postulant incorrupte ex. Vel tation officiis adipisci an, vis at luptatum consulatu. Minimum noluisse id vis. Eos quando munere dignissim et. Et velit saperet vim, pri eu illum nobis theophrastus. His no impedit mnesarchum, per ei modo populo electram, audiam nostrud et his. Id sea omnes aeterno.<br>
				Has fugit omnium voluptatibus eu. Ad vel oratio eruditi. Cu commodo recusabo principes vim, denique honestatis has id. At cum scribentur signiferumque.<br>
				Ut idque audire comprehensam mea, ne mel suavitate gubergren. Populo omnesque est at, consul feugait eos ut, ius no graecis admodum. Usu ex deserunt dignissim dissentias, sed quodsi deterruisset at. Cu dico soleat quaeque ius. Affert electram posidonium mel cu, at accusam singulis nec, ea per novum patrioque omittantur. Mei mollis dignissim ut, illud labores fastidii ad vel.<br>
				Habemus ocurreret philosophia sed an. Vim ad elitr tritani molestiae. Ad etiam indoctum cotidieque pri. Eam ex lobortis disputationi, ea mea porro iisque.'
			];

			$rand = mt_rand( 0, count( $response ) - 1 );

			return new \WP_REST_Response( array(
				'response' => $response[ $rand ],
			) );
		}

		$api_key = WhatsApp\get_plugin()->settings->get_setting( 'openaiApiKey', '' );
		if ( empty( $api_key ) ) {
			return new \WP_Error( 'asnp_ewhatsapp_rest_chat_query_api_key_required', __( 'OpenAI API Key is required.', 'asnp-easy-whatsapp' ), array( 'status' => 400 ) );
		}

		$context = '';
		if ( ! empty( $request['context'] ) ) {
			foreach ( $request['context'] as $value ) {
				if (
					! empty( $value['from'] ) &&
					in_array( strtolower( $value['from'] ), array( 'customer', 'agent' ) ) &&
					! empty( $value['message'] )
				) {
					$context .= strtolower( sanitize_text_field( $value['from'] ) ) . ': ' . wp_kses_post( $value['message'] ) . "\n";
				}
			}
		}

		$response = wp_remote_post( 'https://api.openai.com/v1/completions', [
			'headers' => [
				'Content-Type'  => 'application/json',
    			'Authorization' => 'Bearer ' . $api_key,
			],
			'body' => json_encode( [
				'model'             => 'text-davinci-003',
				'prompt'            => $context . 'Response to: ' . $query,
				'temperature'       => 0.0,
				'max_tokens'        => 100,
				'frequency_penalty' => 0.0,
				'presence_penalty'  => 0.0,
				'top_p'             => 1,
			] ),
		] );

		if ( is_wp_error( $response ) || ! isset( $response['body'] ) ) {
			return new \WP_REST_Response( array(
				'response' => __( 'Sorry, something went wrong please try again.', 'asnp-easy-whatsapp' ),
			) );
		}

		if ( ! empty( $response['body'] ) ) {
			$response = json_decode( $response['body'], true );
		}

		if ( ! empty( $response['choices'][0]['text'] ) ) {
			$response = preg_replace( '/^\n+/', '', wp_kses_post( $response['choices'][0]['text'] ) );
		} else {
			$response = __( 'Sorry, something went wrong please try again.', 'asnp-easy-whatsapp' );
		}

		return new \WP_REST_Response( array(
			'response' => $response,
		) );
	}

}
