<template>
  <!--begin::Toolbar wrapper-->
  <div class="d-flex align-items-stretch flex-shrink-0">
    <!--begin::Search-->
    <div class="d-flex align-items-stretch ms-1 ms-lg-2">
      <!--layout-partial:partials/search/_dropdown.html-->
    </div>
    <!--end::Search-->
    <!--begin::Chat-->
    <div class="d-flex align-items-center ms-1 ms-lg-2">
      <!--begin::Menu wrapper-->
      <div class="btn btn-icon btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px position-relative" id="kt_drawer_chat_toggle">
        <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
        <span class="svg-icon svg-icon-1">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
					<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
					<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
				</svg>
			</span>
        <!--end::Svg Icon-->
        <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
      </div>
      <!--end::Menu wrapper-->
    </div>
    <!--end::Chat-->

    <!--begin::Sidebar Toggler-->
    <div class="d-flex align-items-center ms-1 ms-lg-2 d-lg-none" title="Show header menu">
      <button class="btn btn-icon btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_sidebar_toggle">
        <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
        <span class="svg-icon svg-icon-1">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor" />
					<rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
					<rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
					<rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
					<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
				</svg>
			</span>
        <!--end::Svg Icon-->
      </button>
    </div>
    <!--end::Sidebar Toggler-->
    <!--begin::User-->
    <div class="d-flex align-items-center ms-lg-5" id="kt_header_user_menu_toggle">
      <!--begin::User info-->
      <div class="btn btn-active-light d-flex align-items-center bg-hover-light py-2 px-2 px-md-3" data-kt-menu-trigger="hover" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
        <!--begin::Name-->
        <div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2">
          <span class="text-muted fs-7 fw-semibold lh-1 mb-2">Hello</span>
          <span class="text-dark fs-base fw-bold lh-1">Richard</span>
        </div>
        <!--end::Name-->
        <!--begin::Symbol-->
        <div class="symbol symbol-30px symbol-md-40px">
          <div class="symbol-label bg-dark text-inverse-dark">
            D
          </div>
        </div>
        <!--end::Symbol-->
      </div>
      <!--end::User info-->
      <!--layout-partial:partials/menus/_user-account-menu.html-->
    </div>
    <!--end::User -->
    <!--begin::Header menu toggle-->
    <div class="d-flex d-lg-none align-items-center me-n2" title="Show header menu">
      <button class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
        <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
        <span class="svg-icon svg-icon-1">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="currentColor" />
					<path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="currentColor" />
				</svg>
			</span>
        <!--end::Svg Icon-->
      </button>
    </div>
    <!--end::Header menu toggle-->
  </div>
  <!--end::Toolbar wrapper-->
</template>

<script>
export default {
  name: "Topbar"
}
</script>

<style scoped>

</style>