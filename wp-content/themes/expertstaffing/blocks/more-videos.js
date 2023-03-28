(function( blocks, blockEditor ) {
    var el = wp.element.createElement;
  
    blocks.registerBlockType( 'my-custom-block/more-videos', {
      title: 'More Videos',
      icon: 'smiley',
      category: 'design',
  
      attributes: {
        title: {
          type: 'string',
          source: 'html',
          selector: 'h2',
        },
        id: {
          type: 'string',
          source: 'attribute',
          selector: 'a',
          attribute: 'href',
        },
      },
  
      edit: function( props ) {
        var title = props.attributes.title;
        var link = props.attributes.link;
  
        function onChangeTitle( newTitle ) {
          props.setAttributes( { title: newTitle } );
        }
  
        function onChangeLink( newLink ) {
          props.setAttributes( { link: newLink } );
        }
  
        return el(
          'section',
          {  },
          el(
            'h2',
            {},
            el( blockEditor.RichText, {
              tagName: 'span',
              value: title,
              onChange: onChangeTitle,
              placeholder: 'Enter title here',
            } )
          ),
          el(
            'p',
            { href: link },
            el( blockEditor.RichText, {
              tagName: 'span',
              value: link,
              onChange: onChangeLink,
              placeholder: 'Enter link here',
            } )
          )
        );
      },
  
      save: function( props ) {
        var title = props.attributes.title;
        var link = props.attributes.link;
  
        return el(
          'section',
          {  },
          el(
            'h2',
            {},
            title
          ),
          el(
            'a',
            { href: link },
            ''
          )
        );
      }
    });
  })(
    window.wp.blocks,
    window.wp.blockEditor
  );
  