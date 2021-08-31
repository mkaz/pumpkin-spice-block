import { registerBlockType } from "@wordpress/blocks";
import { useBlockProps } from "@wordpress/block-editor";
import { TextControl } from "@wordpress/components";

import icon from './pumpkin';

registerBlockType("mkaz/pumpkin-spice-block", {
	icon: icon,
	edit: ({ attributes, setAttributes }) => (
		<div {...useBlockProps()}>
			<TextControl
				value={attributes.message}
				onChange={(val) => setAttributes({ message: val })}
			/>
		</div>
	),

	save: ({ attributes }) => (
		<div {...useBlockProps.save()}>{attributes.message}</div>
	),
});
