<?php add_action('admin_head', 'my_custom_admin_css');

function my_custom_admin_css() {
  echo '<style>
    .acf-postbox[id*="acf-group"] {
        margin: 35px 20px;
        box-shadow: 0px 0px 5px 1px rgba(0,0,0,.6);
    }
    .acf-postbox[id*="acf-group"] > div.postbox-header > h2 {
        text-transform: uppercase;
        color: red !important;
        font-size: 14px !important;
    }
    .acf-postbox[id*="acf-group"] .acf-row-handle.order {
        background: red;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        color: #fff;
    }
    .acf-row-handle.order span {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .postbox.yoast.wpseo-metabox {
        margin: 40px 30px;
        box-shadow: 0px 0px 7px 2px rgba(0,0,0,.6);
    }
    .postbox.yoast.wpseo-metabox h2 {
        text-transform: uppercase;
        color: red !important;
    }
    .edit-post-layout__metaboxes:not(:empty) .edit-post-meta-boxes-area {
        margin: auto 0px !important;
    }
  </style>';
}