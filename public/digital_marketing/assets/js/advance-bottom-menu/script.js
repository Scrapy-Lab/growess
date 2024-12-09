var xhr = new XMLHttpRequest();
xhr.open('GET', '../advance-bottom-menu/json/api.json', true);
xhr.onreadystatechange = function() {
  if (xhr.readyState === 4 && xhr.status === 200) {
    var data = JSON.parse(xhr.responseText);
    console.log(data); // Outputs
      // Getting The "ID" of Current Domain
      var thankyou = false
      var abm_id = document.querySelector("[data-biz_bottom_menu_id]").dataset.biz_bottom_menu_id;
      data.forEach(data => {
        if (data.id == abm_id) {
          data.add_custom_css.forEach(link => {
            let style = document.createElement("link")
            style.rel = "stylesheet"
            style.href = link.src;
            document.head.append(style)
          })
          data.add_custom_script.forEach(link => {
            let script = document.createElement("script")
            script.src = link.src;
            document.body.append(script);
          })

          setTimeout(()=> {
          // Create Input Checkbox
          let input = document.createElement("input")
          input.type = "checkbox";
          input.id = "biz_bottom_menu_icons";
          let container = document.createElement("div")
          container.id = "biz_bottom_menu_icons_widget"
          container.dataset.style = data.style
          container.style.setProperty("--left", data.main_icon_position.left)
          container.style.setProperty("--right", data.main_icon_position.right)
          if (data.main_icon_position.right != "auto") {
            container.dataset.rightSide = "true"
          }
          container.dataset.animation = data.main_icon_animation.animation_name;
          container.style.setProperty("--animation-color", data.main_icon_animation.animation_color);
          container.style.setProperty("--animation-speed", data.main_icon_animation.animation_speed + "ms");
          container.style.setProperty("--animation-range", data.main_icon_animation.animation_range);
          container.style.setProperty("--right-side", data.main_icon_position.rotate)
          container.style.setProperty("--top", data.main_icon_position.top)
          container.style.setProperty("--bottom", data.main_icon_position.bottom)
          container.style.setProperty("--width", data.icon_style.width)
          container.style.setProperty("--width-mini", data.icon_style.mini_icons_width)
          container.style.setProperty("--height", data.icon_style.height)
          container.style.setProperty("--height-mini", data.icon_style.mini_icons_height)
          container.style.setProperty("--color", data.icon_style.main_color)
          container.style.setProperty("--background", data.icon_style.main_background)
          container.style.setProperty("--outline", data.icon_style.main_border)
          container.style.setProperty("--main-border-radius", data.icon_style.main_border_radius)
          container.style.setProperty("--mini-border-radius", data.icon_style.mini_border_radius)
          container.style.setProperty("--transition-speed", data.icon_style.transition_speed + "ms")
          container.style.setProperty("--transition-style", data.icon_style.transition_style)
          container.style.setProperty("--icons-offset", data.icon_style.mini_icons_offset)
          container.style.setProperty("--main_icons_offset_x_distance", data.icon_style.main_icons_offset_x)
          container.style.setProperty("--main_icons_offset_y_distance", data.icon_style.main_icons_offset_y)
          // Create Label for That Input
          let label = document.createElement("label")
          label.htmlFor = "biz_bottom_menu_icons"
          label.className = "biz_bottom_menu_icons_switch"
          if (data.icon_style.main_icons_on_open_font != undefined) {
            label.style.setProperty("--on-open-font",  data.icon_style.main_icons_on_open_font)
            label.style.setProperty("--on-close-font",  data.icon_style.main_icons_on_close_font)
            label.style.setProperty("--mask-svg-on",  data.icon_style.mask_svg_on)
            label.style.setProperty("--mask-svg-close",  data.icon_style.mask_svg_close)
          } else {
            label.style.setProperty("--on-open-font", '"\\f590"')
            label.style.setProperty("--on-close-font", '"\\f00d"')
          }
          if(data.icon_style.main_icons_on_open_font == false) {
            label.style.setProperty("--on-open-font", '" "')
            label.style.setProperty("--on-close-font", '" "')
          }
          label.style.setProperty("--family", data.icon_style.font_family)
          label.style.setProperty("--switch-bg", data.icon_style.main_background)
          label.style.setProperty("--switch-bg-close", data.icon_style.main_background_close)
          label.style.setProperty("--switch-color", data.icon_style.main_color)
          label.style.setProperty("--icon-label-bg", data.icon_style.mini_tooltip_bg)
          label.style.setProperty("--icon-label-color", data.icon_style.mini_tooltip_color)
          label.style.setProperty("--icon-label-font-size", data.icon_style.mini_tooltip_font_size)
          if (data.icon_style.set_attribute != undefined) {
            data.icon_style.set_attribute.forEach(attr => {
              if (attr.name == "class") {
                label.setAttribute(attr.name, "biz_bottom_menu_icons_switch " + attr.value)
              } else {
                label.setAttribute(attr.name, attr.value)
              }
            });
          }
          data.icons_order.forEach(icons => {
            let a = document.createElement("a")
            a.className = "biz_bottom_menu_icons_widget_icons"
            a.style.setProperty("--delay", icons.order - 1)
            a.style.setProperty("--index", icons.order - 1)
            a.style.setProperty("--icon_bg", icons.bg)
            if(icons.mask_svg){
              a.style.setProperty("--mask_svg", icons.mask_svg);
            }else{
              a.style.setProperty("--mask_on", "none");
            }

            a.style.setProperty("--icon_font_color", icons.icon_font_color)
            a.style.setProperty("--icon_font_size", icons.icon_font_size)
            a.dataset.pos = icons.order
            a.dataset.text = icons.name
            a.style.setProperty("--mini_outline", icons.border)
            a.style.setProperty("--mini_box-shadow", icons.box_shadow)
            if(icons.border_radius != undefined){
              a.style.setProperty("--mini-border-radius", icons.border_radius)
            }
            icons.set_attribute.forEach(attr => {
              if (attr.name == "class") {
                a.setAttribute(attr.name, "biz_bottom_menu_icons_widget_icons " + attr.value)
              } else {
                a.setAttribute(attr.name, attr.value)
              }
              if (attr.name == "data-open-qr-code") {
                let qr = document.createElement("div")
                qr.className = "biz_bottom_menu_icons_widget_icons_qr_code";
                let img = document.createElement("img")
                img.src = attr.value;
                qr.append(img)
                document.body.prepend(qr)
                qr.addEventListener("click", () => {
                  qr.classList.toggle("open");
                  if(input.checked){
                    input.checked = false;
                  }
                })
              }
              if (attr.name == "data-form-open") {
                let form = document.createElement("div")
                form.className = "biz_bottom_menu_icons_widget_icons_form";
                let span = document.createElement("span")
                let iframe = document.createElement("iframe")
                iframe.id = "biz-bottom-menu-form"
                iframe.src = attr.value;
                form.append(span, iframe)
                document.body.prepend(form)
                span.addEventListener("click", () => {
                  form.classList.toggle("open")
                })
                if (attr.thank_you_page_link != undefined) {
                  iframe.addEventListener("load", () => {
                    console.log("thankyou")
                    if (thankyou) {
                      window.location.href = attr.thank_you_page_link
                    }
                    thankyou = true
                  })
                }
              }
            });
            let i = document.createElement("i")
            i.className = icons.font_icon_class
            a.append(i)
            label.append(a)
          });
        //   container.append(label)
        //   document.body.prepend(container)
        //   document.body.prepend(input)
        //   document.querySelector("[data-open-qr-code]").addEventListener("click", () => {
        //     document.querySelector(".biz_bottom_menu_icons_widget_icons_qr_code").classList.toggle("open");
        //     if(input.checked){
        //       input.checked = false;
        //     }
        //   })
        //   document.querySelector("[data-form-open]").addEventListener("click", () => {
        //     document.querySelector(".biz_bottom_menu_icons_widget_icons_form").classList.toggle("open")
        //   })
          } , 1000)
        }
      });
  }
};
xhr.send();
