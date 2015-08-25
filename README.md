# WordPress-Nested-Comments-Unbound
Plug-In for enabling unlimited "max-depth" in nested comments and formatting the results.

This plug-in allows for a widely applicable solution to the problem of "disappearing reply links" in nested WordPress comment threads at "maximum depth," and also provides the potential for unique, more readable or convenient custom formatting of nested conversations that continue after "maximum depth" has been reached.

Rather than require hacks of WordPress core, direct alteration of commenting templates - typically called via comments.php in the theme root directory - or addition of functions to functions.php based on analysis of code and output, this plug-in will immediately solve the first problem for any WordPress installation that employs built-in nesting and comment-reply-link link functions. 

After activation, the user will be able to set "maximum depth" via the Admin Settings/Discussion interface at a number beyond the likely actually reached depth of any comment thread: The built-in default limit of 10 is changed to 999. 

Within the plug-in the user will be able to adjust the "breakpoint" at which "normal" nesting will cease and a new format for subsequent comments will become available. Comments at depth equal to or higher than the breakpoint depth will have one or both of two new CSS class selectors added to them: "breakpoint" and "super-max." 

In addition, users can also apply the "rightturn and leftturn" styles to create comment threads that "bounce" or "snake" between margins, effectively unboundedly. 

In the initial version of the plug-in, the breakpoint is pre-set. Changing it will be a matter of editing the file. When being readied for addition to the WordPress repository, this and other options will be made adjustable via an Admin settings page. 

Without further changes the plug-in on activation will produce a single column of all comments at breakpoint depth or higher at what will typically be the far right of the comment space. Setting the maximum depth level in Admin will allow reply-links to continue to appear on all comments up to that level.

If you want to keep your reply links available, then you will want to set the maximum depth level at a number unlikely to be reached. 

Further customizations will be theme-dependent, since different themes handle comment-nesting in different ways, often as arguments for wp_list_comments() in comments.php template. 

The css file also contains a single solution that has been tested on both the 2015 theme and a theme employing "ul" rather than "ol" comment-list style. It can either be applied directly to themes sufficiently similar to one or both of those, or modified for themese that use different selectors (e.g., "comment-body" instead of "article," or "commentlist" instead of "comments-area"). 

There are many further possibilities for further customization utilizing the four classes in whatever combinations and in relation to breakpoint settings. 
