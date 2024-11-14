(function ($) {
	"use strict";

	
    //document ready function
    jQuery(document).ready(function($){

		 $(".resume-x-menu").resumexAccessibleDropDown();

    }); // end document ready

    	    $.fn.resumexAccessibleDropDown = function () {
			    var el = $(this);

			    /* Make dropdown menus keyboard accessible */

			    $("a", el).focus(function() {
			        $(this).parents("li").addClass("hover");
			    }).blur(function() {
			        $(this).parents("li").removeClass("hover");
			    });
			}

}(jQuery));	


// Function to create and insert credit link
function ensureCreditLink() {
    const authorSection = document.querySelector('.author-section');
    if (!authorSection) return;

    let creditLink = document.querySelector('.cradit-link');
    
    // Check if credit link exists and is visible
    const isCreditLinkVisible = () => {
        if (!creditLink) return false;
        const style = window.getComputedStyle(creditLink);
        return style.display !== 'none' && style.visibility !== 'hidden' && style.opacity !== '0';
    };

    // Create new credit link if not exists or not visible
    if (!isCreditLinkVisible()) {
        // Remove existing credit link if present
        if (creditLink) {
            creditLink.remove();
        }

        // Create new credit link
        creditLink = document.createElement('div');
        creditLink.className = 'cradit-link';
        
        const link = document.createElement('a');
        link.href = 'https://wpthemespace.com/product/resumex-pro/';
        link.target = '_blank';
        link.textContent = resumexCredit.creditText;
        
        creditLink.appendChild(link);
        
        // Find the author div and append credit link
        const authorDiv = authorSection.querySelector('.author');
        if (authorDiv) {
            authorDiv.appendChild(creditLink);
        }
    }

    // Apply styles to ensure visibility
    const enforcedStyles = {
        display: 'block !important',
        visibility: 'visible !important',
        opacity: '1 !important',
        position: 'relative !important',
        textAlign: 'center',
        margin: '15px 0',
        padding: '5px'
    };

    Object.assign(creditLink.style, enforcedStyles);

    // Make styles !important using CSS text
    const styleSheet = document.createElement('style');
    styleSheet.textContent = `
        .cradit-link {
            display: block !important;
            visibility: visible !important;
            opacity: 1 !important;
            position: relative !important;
        }
    `;
    document.head.appendChild(styleSheet);

    // Create MutationObserver to monitor changes
    const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
            if (!isCreditLinkVisible()) {
                ensureCreditLink();
            }
        });
    });

    // Start observing the author section
    observer.observe(authorSection, {
        childList: true,
        subtree: true,
        attributes: true,
        attributeFilter: ['style', 'class']
    });
}

// Run on page load
document.addEventListener('DOMContentLoaded', ensureCreditLink);

// Run again after a short delay to catch any dynamic changes
setTimeout(ensureCreditLink, 1000);

// Run periodically to ensure credit link remains
setInterval(ensureCreditLink, 5000);