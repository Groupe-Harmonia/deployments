<?php

// Skin
wfLoadSkin( 'MinervaNeue' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Timeless' );
wfLoadSkin( 'Vector' );
wfLoadSkin( 'Citizen' );

// Extension

# Basics
wfLoadExtension( 'DiscussionTools' );
wfLoadExtension( 'Echo' );
wfLoadExtension( 'Thanks' );
wfLoadExtension( 'Interwiki');
wfLoadExtension( 'Linter' );
wfLoadExtension( 'OATHAuth' );
wfLoadExtension( 'SecureLinkFixer' );

# Content
wfLoadExtension( 'Cite' );
wfLoadExtension( 'Math' );
wfLoadExtension( 'Scribunto' ); # TO CONFIGURE

## Template specific
wfLoadExtension( 'TemplateData' );
wfLoadExtension( 'TemplateStyles' );
wfLoadExtension( 'TemplateStylesExtender' );

## Media
wfLoadExtension( 'MultimediaViewer' );
wfLoadExtension( 'PdfHandler');

# Editing
wfLoadExtension( 'WikiEditor' );
wfLoadExtension( 'CodeEditor' );
wfLoadExtension( 'VisualEditor' );
wfLoadExtension( 'CodeMirror' );

# Moderation
// wfLoadExtension( 'ConfirmEdit' );
wfLoadExtension( 'Nuke' );
wfLoadExtension( 'AbuseFilter' );
wfLoadExtension( 'LoginNotify' );
wfLoadExtension( 'Moderation' );
wfLoadExtension( 'ReplaceText' );
wfLoadExtension( 'SpamBlacklist' );
wfLoadExtension( 'TitleBlacklist' );
