<template>
  <!--begin::Aside-->
  <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '225px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle" data-kt-sticky="true" data-kt-sticky-name="aside-sticky" data-kt-sticky-offset="{default: false, lg: '1px'}" data-kt-sticky-width="{lg: '225px'}" data-kt-sticky-left="auto" data-kt-sticky-top="94px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
    <!--begin::Aside nav-->
    <div class="hover-scroll-overlay-y my-5 my-lg-5 w-100 ps-4 ps-lg-0 pe-4 me-1" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_header" data-kt-scroll-wrappers="#kt_aside" data-kt-scroll-offset="5px">
      <!--begin::Menu-->
      <div class="menu menu-column menu-active-bg menu-hover-bg menu-title-gray-700 fs-6 menu-rounded w-100" id="#kt_aside_menu" data-kt-menu="true">
        <!--begin::Heading-->
        <div class="menu-item">
          <div class="menu-content pb-2">
            <span class="menu-section text-muted text-uppercase fs-7 fw-bold">Public</span>
          </div>
        </div>
        <!--end::Heading-->
        <!--begin::Menu item-->
        <div class="menu-item">
          <a href="?page=index" class="menu-link active">
            <span class="menu-title">Home Dashboard</span>
          </a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
      </div>
    </div>
    <!--end::Aside nav-->
  </div>
  <!--end::Aside-->
</template>

<script>
export default {
  name: "Aside"
}
</script>

<style scoped>

</style>