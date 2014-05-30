# Minstamic for Statamic

A Statmic Plugin to minify template HTML output.

## Usage:

Wrap the content you would like to minify in the {{ minstamic }} tag pair.

For example, I use it in my layout files like this:

	{{ minstamic }}
	{{ theme:partial src="includes/header" }}
	<main role="main">
		<div class="container">
			{{ layout_content }}
		</div>
	</main>
	{{ theme:partial src="includes/footer" }}
	{{ /minstamic }}

## Why Is This Needed?!?

As you are likely aware, working with inline-block can be really frustrating if there are line breaks or spaces in your markup. Plus, it’s good practice to serve minified output. An argument can be made that you should just minify the contents of your template manually — perhaps keep a set of template in some directory somewhere, and use a Grunt process to minify them to the correct Statamic directories. That's fine, but seems like a lot of work and a lot to keep track of and this works really well so it's what I do.

## Feedback

If anyone knows how to solve the template parser problem, which I have commented on in the plugin code, feel free let me know about it or do a pull request.

## License

Copyright 2014 TJ Draper.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

	http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.