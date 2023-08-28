class Lightbox {
  constructor(data) {
    /**
     * setup private properties
     */
    this.gallery = null; // cache gallery
    this.newImage = null;
    this.overlay = null;
    this.data = data.selector;
  }

  /**
   * init
   */
  startItUp() {
    // cache the images
    this.gallery = document.querySelector(this.data);

    // create the overlay and append it to body
    this.overlay = document.createElement("div");
    this.overlay.id = "overlay";

    this.newImage = document.createElement("img");
    this.overlay.appendChild(this.newImage);

    document.getElementsByTagName("body")[0].appendChild(this.overlay);

    // attach event handlers
    this.setupHandlers();
  }

  setupHandlers() {
    // clicked on image
    this.gallery.addEventListener(
      "click",
      (event) => {
        if (event.target && event.target.tagName.toLowerCase() === "img") {
          this.attachImage(event.target);
          this.showLightbox();
          event.preventDefault();
        }
      },
      false
    );

    // clicked on overlay
    this.overlay.addEventListener(
      "click",
      (event) => {
        this.hideLightbox();
      },
      false
    );

    // clicked on overlay
    document.addEventListener(
      "keyup",
      (event) => {
        var which = event.keyCode || event.which;

        if (!keys) {
          var keys = { esc: 27 };
        }

        switch (which) {
          case keys.esc:
            this.hideLightbox();
            break;
        }
      },
      false
    );
  }

  /**
   * attach image
   */
  attachImage(clickedElement) {
    this.newImage.src = clickedElement.parentNode.href;
  }

  /**
   * show it
   */
  showLightbox() {
    // overlay.style.display = 'block';
    overlay.classList.add("show");
  }

  /**
   * hide it
   */
  hideLightbox() {
    // overlay.style.display = 'none';
    overlay.classList.remove("show");
  }
}

const lightbox = new Lightbox({ selector: ".gallery" });
lightbox.startItUp();
