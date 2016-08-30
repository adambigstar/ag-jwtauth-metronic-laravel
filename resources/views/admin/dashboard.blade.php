{{--<div class="page-header-fixed page-sidebar-closed-hide-logo page-on-load" ng-class="{'page-content-white': settings.layout.pageContentWhite,'page-container-bg-solid': settings.layout.pageBodySolid, 'page-sidebar-closed': settings.layout.pageSidebarClosed}">--}}

  <!-- BEGIN HEADER -->
  <div data-ng-include="'html/admin/header.html'" data-ng-controller="HeaderController" class="page-header navbar navbar-fixed-top"> </div>
  <!-- END HEADER -->
  <div class="clearfix"> </div>
  <!-- BEGIN CONTAINER -->
  <div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div data-ng-include="'html/admin/sidebar.html'" data-ng-controller="SidebarController" class="page-sidebar-wrapper"> </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
      <div class="page-content">
        <!-- BEGIN STYLE CUSTOMIZER(optional) -->
        <div data-ng-include="'html/admin/theme-panel.html'" data-ng-controller="ThemePanelController" class="theme-panel hidden-xs hidden-sm"> </div>
        <!-- END STYLE CUSTOMIZER -->
        <!-- BEGIN ACTUAL CONTENT -->
        <ui-view class="fade-in-up"></ui-view>
        <!-- END ACTUAL CONTENT -->
      </div>
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    <a href="javascript:;" class="page-quick-sidebar-toggler">
      <i class="icon-login"></i>
    </a>
    <div data-ng-include="'html/admin/quick-sidebar.html'" data-ng-controller="QuickSidebarController" class="page-quick-sidebar-wrapper"></div>
    <!-- END QUICK SIDEBAR -->
  </div>
  <!-- END CONTAINER -->
  <!-- BEGIN FOOTER -->
  <div data-ng-include="'html/admin/footer.html'" data-ng-controller="FooterController" class="page-footer"> </div>
  <!-- END FOOTER -->

