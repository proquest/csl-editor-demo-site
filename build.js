({
	baseUrl: "cslEditorLib",
	mainConfigFile: "cslEditorLib/src/config.js",
	optimize: "none",

	appDir: ".",
	dir: "../csl",

	fileExclusionRegExp: /^\.git$/,

/*	
 *	TODO: try to get this working, we shouldn't include a different jquery on
 *	      every page
 */
	paths: {
		'jquery': 'empty:',
		'jquery.ui': 'empty:',
		'external/citeproc/citeproc': 'empty:'
	},
	
	modules: [
		{
			name: 'src/VisualEditor'
		},
		{
			name: 'src/SearchByExample'
		},
		{
			name: 'src/SearchByName'
		},
		{
			name: 'src/CodeEditor'
		}
	]
})
