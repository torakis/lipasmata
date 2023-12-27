( function( api ) {
	// Extends our custom "elevation-lite" section.
	api.sectionConstructor['elevation-lite'] = api.Section.extend( {
		// No events for this type of section.
		attachEvents: function () {},
		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );
} )( wp.customize );