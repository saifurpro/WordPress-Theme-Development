# Installation

### Usage as Theme
```
require_once dirname( __FILE__ ) .'/cs-framework/cs-framework.php';
```

# Enable - Disable Mods

``` 
define( 'CS_ACTIVE_FRAMEWORK',  true  ); // default true
define( 'CS_ACTIVE_METABOX',    false ); // default true
define( 'CS_ACTIVE_SHORTCODE',  false ); // default true
define( 'CS_ACTIVE_CUSTOMIZE',  false ); // default true
```

# Enable Light Theme
Add the following define code somewhere in your theme or plugin, and light theme will be active.
```
define( 'CS_ACTIVE_LIGHT_THEME', true ); // default false
```

# Disable Default Metabox
```
1. Go to cs-framework Folder
2. Go to cs-framework.php
3. Comment the below config files

for eg:

  // configs
  //    cs_locate_template( 'config/framework.config.php'  );
  //    cs_locate_template( 'config/metabox.config.php'    );
  //    cs_locate_template( 'config/taxonomy.config.php'   );
  //    cs_locate_template( 'config/shortcode.config.php'  );
  //    cs_locate_template( 'config/customize.config.php'  );
```

# Overriding Files

You can override an existing file without change themename/cs-framework folder. just create one themename/cs-framework-override folder on your theme directory. for eg:

```
themename/cs-framework-override/config/framework.config.php
themename/cs-framework-override/functions/constants.php
themename/cs-framework-override/fields/text/text.php
```
