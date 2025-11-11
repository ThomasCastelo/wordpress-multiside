( function( api ) {

	// Extends our custom "fse-travel-blog" section.
	api.sectionConstructor['fse-travel-blog'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );