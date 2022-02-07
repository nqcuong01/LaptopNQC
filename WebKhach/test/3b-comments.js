var comments = {
  // (A) AJAX HELPER FUNCTION
  ajax : (data, after) => {
    // (A1) DATA TO SEND
    var fdata = new FormData();
    fdata.append("pid", document.getElementById("pid").value);
    for (let k in data) { fdata.append(k, data[k]); }

    // (A2) AJAX FETCH
    fetch("2-ajax-comments.php", { method: "POST", body: fdata })
    .then(res => res.text()).then(after)
    .catch((err) => { console.error(err); });
  },

  // (B) LOAD COMMENTS INTO <DIV ID="CWRAP">
  load : () => {
    comments.ajax(
      { req : "show" },
      (res) => { document.getElementById("cwrap").innerHTML = res; }
    );
  },

  // (C) ADD COMMENT
  add: () => {
    comments.ajax(
      // (C1) GET COMMENT
      {
        req : "add",
        name : document.getElementById("cname").value,
        msg : document.getElementById("cmsg").value
      },

      // (C2) RELOAD COMMENTS + RESET FORM AFTER ADD
      (res) => {
        if (res == "OK") {
          document.getElementById("cadd").reset();
          comments.load();
        } else { alert(res); }
      }
    );
    return false;
  }
};
window.addEventListener("DOMContentLoaded", comments.load);
