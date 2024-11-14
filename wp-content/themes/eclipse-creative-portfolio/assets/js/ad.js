document.addEventListener("DOMContentLoaded", function () {
    if(document.querySelector("footer")) {
      var footer = document.querySelector("footer");
      if (footer) {
          var footerInnerDiv = footer.querySelector("div");
          if (footerInnerDiv) {
              var htmlContent = `
                  <div style="color: #fff; margin-block-start: var(--wp--preset--spacing--40) !important; font-family: var(--wp--preset--font-family--urbanist) !important;">
                          <a style="color: #fff;" href="https://realtimethemes.com/theme-eclipse" data-type="link" data-id="https://realtimethemes.com/theme-eclipse" target="_blank" rel="noreferrer noopener">
                            Eclipse Creative Portfolio
                          </a>Wordpress Theme.
                  </div>
              `;
              footerInnerDiv.innerHTML += htmlContent;
          }
      }
  }
  });