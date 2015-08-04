(function() {
    tinymce.PluginManager.add('wpvkp_mce_button', function(editor, url) {
        editor.addButton('wpvkp_mce_button', {
            text: 'WPVKP Shortcodes',
            icon: false,
            type: 'menubutton',
            menu: [
                // BUTTONS
                {
                    text: 'Button',
                    onclick: function() {
                        editor.insertContent('[wpvkp_button size="medium" color="gray" style="normal" link="http://wpvkp.com" target="_blank" rel="nofollow"]Preview[/wpvkp_button]');
                    },
                },

                // ACCORDION
                {
                    text: 'Accordion',
                    onclick: function() {
                        editor.insertContent('[wpvkp_accordion_content]\
                                          [wpvkp_toggle heading="Title 1" onload="closed"]Content[/wpvkp_toggle]\
                                          [wpvkp_toggle heading="Title 2" onload="closed"]Content[/wpvkp_toggle]\
                                          [/wpvkp_accordion_content]');
                    },
                },
                // COLUMNS
                {
                    text: 'Columns',
                    menu: [{
                        text: '1/2-1/2',
                        onclick: function() {
                            editor.insertContent('[wpvkp_columns]\
                                              [wpvkp_column position="half first"]Content[/wpvkp_column]\
                                              [wpvkp_column position="half last"]Content[/wpvkp_column]\
                                              [/wpvkp_columns]');
                        },
                    }, {
                        text: '1/3-1/3-1/3',
                        onclick: function() {
                            editor.insertContent('[wpvkp_columns]\
                                              [wpvkp_column position="one-third first"]Content[/wpvkp_column]\
                                              [wpvkp_column position="one-third"]Content[/wpvkp_column]\
                                              [wpvkp_column position="one-third last"]Content[/wpvkp_column]\
                                              [/wpvkp_columns]');
                        },
                    }, {
                        text: '1/4-1/4-1/4-1/4',
                        onclick: function() {
                            editor.insertContent('[wpvkp_columns]\
                                             [wpvkp_column position="one-fourth first"]Content[/wpvkp_column]\
                                             [wpvkp_column position="one-fourth"]Content[/wpvkp_column]\
                                             [wpvkp_column position="one-fourth"]Content[/wpvkp_column]\
                                             [wpvkp_column position="one-fourth last"]Content[/wpvkp_column]\
                                             [/wpvkp_columns]');
                        },
                    }]
                },
                // CLEARFIX
                {
                    text: 'Clearfix',
                    onclick: function() {
                        editor.insertContent('[wpvkp_clearfix]');
                    },
                },
                // DIVIDER
                {
                    text: 'Divider',
                    onclick: function() {
                        editor.insertContent('[wpvkp_divider style="normal"]');
                    },
                },
                // ICONS
                {
                    text: 'Icon',
                    onclick: function() {
                        editor.insertContent('[wpvkp_icon icon="genericon-rating-empty" size="normal"]');
                    },
                },
                // NOTICE BOX
                {
                    text: 'Notice Box',
                    onclick: function() {
                        editor.insertContent('[wpvkp_notice color="gray"]Content[/wpvkp_notice]');
                    },
                },
                // TAB
                {
                    text: 'Tabs',
                    onclick: function() {
                        editor.insertContent('[wpvkp_tabs][wpvkp_tab label="Title 1"]Content 1[/wpvkp_tab][wpvkp_tab label="Title 2"]Content 2[/wpvkp_tab][/wpvkp_tabs]');
                    },
                },
                // TOGGLE
                {
                    text: 'Toggle',
                    onclick: function() {
                        editor.insertContent('[wpvkp_toggle heading="Title" onload="closed"]Content[/wpvkp_toggle]');
                    },
                },
                // MAP
                {
                    text: 'Map',
                    onclick: function() {
                        editor.insertContent('[wpvkp_map coordinates="44.812284,-91.497729" address="Eau Claire St" width="660px" hewpvkpht="400px"]');
                    },
                },
            ]
        });
    });
})();
