/**
 * GRAB ELEMENTS
 */
var progress = document.querySelector(".progress"),
  textarea = document.querySelector("textarea"),
  counter = document.querySelector(".counter");

var tweetLength = 40,
  warningZone = Math.floor(tweetLength * (1 / 2)),
  dangerZone = Math.floor(tweetLength * (3 / 4));

/**
 * SET DASH-ARRAY/OFFSET
 */
var pathLength = Math.PI * (progress.getAttribute("r") * 2);

progress.style.strokeDashoffset = pathLength + "px";
progress.style.strokeDasharray = pathLength + "px";

/**
 * ON PASTE
 */

var pasted = false;

textarea.addEventListener("paste", (event) => {
  pasted = true;
});

/**
 * ON INPUT
 */

textarea.addEventListener("input", (event) => {
  const len = textarea.value.length,
    per = textarea.value.length / tweetLength;

  if (pasted) {
    pasted = false;
    // Im not shure what to do here.
  }

  // handle progress
  // progressFunc(len, per);
  Orb.updateProgress(len, per);

  // handle counter
  // handleCounter(len);
  Orb.updateCounter(len);
});

var Orb = (() => {
  return {
    updateProgress: (len, per) => {
      if (len <= tweetLength) {
        var newOffset = pathLength - pathLength * per + "px";
        progress.style.strokeDashoffset = newOffset;
      } else {
        progress.style.strokeDashoffset = "0px";
      }
      // handle colors
      Orb.updateColors(len);
    },
    updateColors: (len) => {
      //
      // ORIGINAL
      //
      // progress.classList.toggle("warn", len > warningZone && len < dangerZone);
      // progress.classList.toggle("danger", len >= dangerZone);
      // progress.classList.toggle("tragedy", len == tweetLength);
      //
      //
      // FIRST TEST
      //
      if (len > warningZone && len < dangerZone) {
        progress.classList.add("warn");
      } else {
        progress.classList.remove("warn");
      }
      if (len >= dangerZone) {
        progress.classList.add("danger");
      } else {
        progress.classList.remove("danger");
      }
      if (len == tweetLength) {
        progress.classList.add("tragedy");
      } else {
        progress.classList.remove("tragedy");
      }
      if (len <= tweetLength && event.inputType.startsWith("deleteContent")) {
        console.log(event.inputType);
        progress.classList.remove("danger");
      }
    },
    updateCounter: (len) => {
      counter.textContent = tweetLength - len;
      // counter.classList.toggle("danger", len >= tweetLength);
      if (len >= tweetLength) {
        counter.classList.add("danger");
      } else {
        counter.classList.remove("danger");
      }
    },
  };
})();
