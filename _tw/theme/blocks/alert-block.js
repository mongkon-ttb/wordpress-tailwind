import { registerBlockType } from '@wordpress/blocks';
import { InspectorControls, useBlockProps } from '@wordpress/block-editor';
import { PanelBody, SelectControl, TextControl } from '@wordpress/components';

registerBlockType('custom/alert-block', {
    title: 'Alert Block',
    icon: 'warning',
    category: 'design',
    attributes: {
        message: { type: 'string', default: 'This is an alert!' },
        type: { type: 'string', default: 'info' }
    },
    edit: ({ attributes, setAttributes }) => {
        const { message, type } = attributes;
        const blockProps = useBlockProps({
            className: `p-4 rounded-lg border ${getAlertClasses(type)}`
        });

        return (
            <div {...blockProps}>
                <InspectorControls>
                    <PanelBody title="Alert Settings">
                        <SelectControl
                            label="Alert Type"
                            value={type}
                            options={[
                                { label: 'Success', value: 'success' },
                                { label: 'Info', value: 'info' },
                                { label: 'Warning', value: 'warning' },
                                { label: 'Danger', value: 'danger' }
                            ]}
                            onChange={(newType) => setAttributes({ type: newType })}
                        />
                        <TextControl
                            label="Message"
                            value={message}
                            onChange={(newMessage) => setAttributes({ message: newMessage })}
                        />
                    </PanelBody>
                </InspectorControls>
                <p>{message}</p>
            </div>
        );
    },
    save: ({ attributes }) => {
        const { message, type } = attributes;
        const blockProps = useBlockProps.save({
            className: `p-4 rounded-lg border ${getAlertClasses(type)}`
        });

        return <div {...blockProps}><p>{message}</p></div>;
    }
});

function getAlertClasses(type) {
    const classes = {
        success: 'bg-green-100 border-green-500 text-green-700',
        info: 'bg-blue-100 border-blue-500 text-blue-700',
        warning: 'bg-yellow-100 border-yellow-500 text-yellow-700',
        danger: 'bg-red-100 border-red-500 text-red-700'
    };
    return classes[type] || classes.info;
}
