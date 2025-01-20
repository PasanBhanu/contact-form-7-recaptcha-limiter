# Contact Form 7 reCAPTCHA Limiter

**Contact Form 7 reCAPTCHA Limiter** is a WordPress plugin that ensures the reCAPTCHA scripts and styles are loaded only on pages containing Contact Form 7 forms. This improves performance and eliminates unnecessary reCAPTCHA assets on other pages.

## Features

- Limits reCAPTCHA scripts and styles to pages with `[contact-form-7]` shortcodes.
- Prevents unnecessary loading of Google reCAPTCHA resources on unrelated pages.
- Improves site performance by reducing the number of globally loaded scripts.

## Requirements

- WordPress 5.0 or higher
- Contact Form 7 plugin installed and active
- PHP 7.0 or higher

## Installation

### 1. Download and Install
1. Download the plugin files from the repository or your zip archive.
2. Extract the files and upload the folder `contact-form-7-recaptcha-limiter` to the `/wp-content/plugins/` directory.

### 2. Activate the Plugin
1. Go to the **Plugins** section of your WordPress admin panel.
2. Find "Contact Form 7 reCAPTCHA Limiter" in the list and click **Activate**.

## Usage

The plugin automatically handles the reCAPTCHA script management. Once activated:
1. Visit any page with a Contact Form 7 form containing the `[contact-form-7]` shortcode, and reCAPTCHA will load.
2. Other pages without the shortcode will not load the reCAPTCHA scripts or styles.

## How It Works

1. The plugin detects pages with the `[contact-form-7]` shortcode.
2. It ensures that the `google-recaptcha` and `wpcf7-recaptcha` scripts are only enqueued on those pages.
3. Other pages remain unaffected, improving load time and reducing unnecessary script calls.

## FAQ

### **Why do I need this plugin?**
By default, Contact Form 7 loads reCAPTCHA scripts and styles globally on all pages, which can impact site performance. This plugin prevents that and ensures reCAPTCHA is only loaded when required.

### **Does this plugin modify Contact Form 7?**
No, it works as an add-on to Contact Form 7 without modifying its core files.

### **Will this plugin affect other functionality of Contact Form 7?**
No, it only affects the loading behavior of reCAPTCHA scripts and styles. Other functionalities remain intact.

### **Is this plugin compatible with caching plugins?**
Yes, but ensure you clear your cache after activating or deactivating the plugin.

## Support

For any issues or feature requests, please [open an issue](https://github.com/your-repository-link/issues) or contact the plugin author.

## License

This plugin is licensed under the [Apache 2.0 License](https://www.apache.org/licenses/LICENSE-2.0). See the `LICENSE` file for more details.

## Contribute

Contributions are welcome! If you'd like to contribute:
1. Fork the repository.
2. Create a feature branch.
3. Submit a pull request.

## Projects Using the Plugin

If you are using this plugin, send me your website. It's a pleasure to see the work in action.

- [Find Prompts for AI - Blog](https://findpromptsforai.com)
