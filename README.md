# WordPress-Nested-Comments-Unbound
Plug-In for enabling unlimited "max-depth" in nested comments and formatting the results.

This simple plug-in allows for a widely applicable solution to the problem of "disappearing reply links" in nested WordPress comment threads at "maximum depth." 

Rather than require hacks of WordPress core, direct alteration of commenting templates - typically called via comments.php in the theme root directory - or addition of functions to functions.php based on analysis of code and output, this plug-in will immediately solve the problem for any WordPress installation that employs built-in nesting and comment-reply-link link functions. 

After activation, the user will be able to set "maximum depth" via the Admin Settings/Discussion interface at a number beyond the likely actually reached depth of any comment thread: The built-in default limit of 10 is changed to 999. 

Within the plug-in the user will be able to set the "breakpoint" at which "normal" nesting will cease and a new format for subsequent comments will become available. All comments at depth higher than the breakpoint will have the new "super-max" class assigned to them. (In the initial version of the plug-in, the breakpoint is set at 10, and changing it will be a matter of editing the file. When being readied for addition to the WordPress repository, this and other options will be adjustable via an Admin settings page.) 

Without further changes the plug-in on activation will produce a single column of all comments at max-depth or higher at what will typically be the far right of the comment space. Further customizations will be theme-dependent, since different themes handle comment-nesting in different ways, often as arguments for wp_list_comments() in comments.php template. 

For now, the css file will hold only the simple version, but CSS for producing a sub-thread re-started at left with continued nesting has already been tested, and there are many possibilities for further customization utilizing the new "super-max" class selector, and, in future, additional selectors. 
