<template>
  <Head title="Home Dashboard"/>
  <div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-column flex-column-fluid">
      <!--layout-partial:layout/header/_base.html-->
      <Header/>
      <!--begin::Container-->
      <div id="kt_content_container" class="d-flex flex-column-fluid align-items-stretch container-fluid">
        <!--layout-partial:layout/_aside.html-->
        <Aside/>
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
          <!--begin::Content-->
          <div class="content flex-column-fluid" id="kt_content">
            <!--layout-partial:layout/_toolbar.html-->
            <!--begin::Post-->
            <div class="post" id="kt_post">
              <slot/>
            </div>
            <!--end::Post-->
          </div>
          <!--end::Content-->
          <!--layout-partial:layout/_footer.html-->
        </div>
        <!--end::Wrapper-->
        <!--layout-partial:layout/sidebar/_base.html-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::Page-->
  </div>
</template>

<script>
import Header from "./partials/header/Header";
import LeftMenu from "../components/layouts/LeftMenu";
import Aside from "./partials/aside/Aside";

export default {
  name: "UserLayout",
  components: {Aside, Header,LeftMenu},
  mounted() {


  }
}
</script>