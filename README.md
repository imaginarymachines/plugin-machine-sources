# Sources For Plugin Machine 2


Templates for [Plugin Machine v2](https://pluginmachine.com/wordpress-plugin-generator/)

- Plugin Machine v2 uses Github repos for templates.
- Also, this repo has the configuration for each of those templates.
- It is organized by Github org/repo
- Inside that folder
    - There must be:
        - `config.json`
            - Must have these keys:
                - `builder`
                    - `fields` and `groups` for [imaginary-ui](https://github.com/imaginarymachines/imaginary-ui/blob/main/docs/config.md)
                - `id`
                - `label`
                - `includePaths`
            - May have these keys:
                - `originalNamespace`
                - `mainFile`
    - There may be:
        - A file that is the initalization file or "main" file for the package.
    - logo.png
        - Logo for that package
    - repo.json
        - This is not used yet. Does not seam needed.

## What Is In Each Source


### repo.json

The Github repo that has the actual templates.

```json
{
    "owner": "imaginarymachines",
    "name": "core-style-plugin"
}
```

### config.json


- @todo document this.
- See trustedlogin/client/config.json.

### main.php

Optional. A php file to be used to initalize the feature.

- See trustedlogin/client/main.php

### logo.png

Optional. A logo for the template.
