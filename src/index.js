import { registerBlockType } from '@wordpress/blocks';
import Edit from './edit'; // The Edit component for the block
import './style.scss'; // The block styles

registerBlockType( 'example/popular-post-block', {
    apiVersion: 2, // Ensure you're using API version 2 for newer blocks
    title: 'Popular Posts',
    category: 'widgets', // Category for your block
    icon: 'star-filled', // Icon for your block
    description: 'A block to display popular posts.',
    attributes: {
        postCount: {
            type: 'number',
            default: 5,
        },
    },
    edit: Edit, // The editor component
    save: () => null, // Dynamic block: No need to save content, it's rendered server-side
    render_callback: ( attributes ) => {
        // This will handle the rendering on the frontend
        // You can pass the attributes to a PHP callback or render directly in the JS if needed
        // Here we will pass it to the PHP render callback
        return null; // Return null since the rendering is handled server-side via PHP
    },
});
