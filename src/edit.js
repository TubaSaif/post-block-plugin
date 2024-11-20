import { __ } from '@wordpress/i18n';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, RangeControl } from '@wordpress/components';

const Edit = ( { attributes, setAttributes } ) => {
    const { postCount } = attributes;

    return (
        <div { ...useBlockProps() }>
            <InspectorControls>
                <PanelBody title={ __( 'Settings', 'popular-post-block' ) }>
                    <RangeControl
                        label={ __( 'Number of Posts', 'popular-post-block' ) }
                        value={ postCount }
                        onChange={ ( value ) => setAttributes( { postCount: value } ) }
                        min={ 1 }
                        max={ 10 }
                    />
                </PanelBody>
            </InspectorControls>
            <p>{ __( 'Popular Posts will be displayed here.', 'popular-post-block' ) }</p>
        </div>
    );
};

export default Edit;
