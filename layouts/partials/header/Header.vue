<template>
  <!--begin::Header-->
  <div id="kt_header" class="header align-items-stretch">
    <!--begin::Container-->
    <div class="container-xxl d-flex align-items-stretch justify-content-between">
      <!--begin::Brand-->
      <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 w-lg-225px me-5">
        <!--begin::Aside mobile toggle-->
        <div class="btn btn-icon btn-active-icon-primary ms-n2 me-2 d-flex d-lg-none" id="kt_aside_toggle">
          <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
          <span class="svg-icon svg-icon-1">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
						<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
					</svg>
				</span>
          <!--end::Svg Icon-->
        </div>
        <!--end::Aside mobile toggle-->
        <!--begin::Logo-->
        <a href="#">
          <h2>Lifetimedesign LMS</h2>
          <!--<img alt="Logo" src="assets/media/logos/demo5.svg" class="d-none d-lg-inline h-30px theme-light-show" />-->
          <!--<img alt="Logo" src="assets/media/logos/demo5-mobile.svg" class="d-lg-none h-25px" />-->
        </a>
        <!--end::Logo-->
      </div>
      <!--end::Brand-->
      <!--begin::Wrapper-->
      <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
        <!--begin::Navbar-->
        <div class="d-flex align-items-stretch" id="kt_header_nav">
          <!--layout-partial:layout/header/__menu.html-->
        </div>
        <!--end::Navbar-->
        <!--layout-partial:layout/header/__topbar.html-->
        <Topbar/>
      </div>
      <!--end::Wrapper-->
    </div>
    <!--end::Container-->
  </div>
  <!--end::Header-->
</template>

<script>
import Topbar from "./Topbar";
export default {
  name: "Header",
  components: {Topbar}
}
</script>

<style scoped>

</style>