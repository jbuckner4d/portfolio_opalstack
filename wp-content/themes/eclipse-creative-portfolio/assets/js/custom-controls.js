(function() {
    // Wait for the element to be present
    function runWhenElementExists(selector, callback) {
        const element = document.querySelector(selector);
        if (element) {
            callback();
        } else {
            // Retry after a short delay if the element isn't found
            setTimeout(() => runWhenElementExists(selector, callback), 100);
        }
    }

    // Ensure wp.customize is available before running the script
    function runWhenCustomizeIsReady(callback) {
        if (typeof wp !== 'undefined' && typeof wp.customize !== 'undefined') {
            callback(wp.customize);
        } else {
            setTimeout(() => runWhenCustomizeIsReady(callback), 100);
        }
    }

    // Specify the selector for the element you're waiting for
    const elementSelector = '#your-element-id-or-class'; // Replace with your actual element selector

    runWhenElementExists(elementSelector, function() {
        runWhenCustomizeIsReady(function(api) {
            // Your original code
            api.sectionConstructor['eclipse-creative-portfolio-upsell'] = api.Section.extend({
                attachEvents: function() {},
                isContextuallyActive: function() {
                    return true;
                }
            });

            const eclipse_creative_portfolio_section_lists = ['banner', 'service'];
            eclipse_creative_portfolio_section_lists.forEach(eclipse_creative_portfolio_homepage_scroll);

            function eclipse_creative_portfolio_homepage_scroll(item) {
                item = item.replace(/-/g, '_');
                api.section('eclipse-creative-portfolio_' + item + '_section', function(section) {
                    section.expanded.bind(function(isExpanding) {
                        api.previewer.send(item, { expanded: isExpanding });
                    });
                });
            }
        });
    });
})();
