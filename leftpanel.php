<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">MangaTranslation</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Manga Translation
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item <?php echo $menu['active']["workflow"]?>">
  <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUpload" aria-expanded="true" aria-controls="collapseUpload">
    <i class="fas fa-fw fa-cog"></i>
    <span>Workflow</span>
  </a>
  <div id="collapseUpload" class="collapse <?php echo $menu['show']["workflow"]?>" aria-labelledby="headingUpload" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Workflow</h6>
      <a class="collapse-item <?php echo $menu['active']["upload"]?>" href="?action=upload"> 1 - Upload Image</a>
      <a class="collapse-item <?php echo $menu['active']["textboxes"]?>" href="?action=textboxes"> 2 - Select Textboxes</a>
      <a class="collapse-item <?php echo $menu['active']["translate"]?>" href="?action=translate"> 3 - Translate</a>
      <a class="collapse-item <?php echo $menu['active']["export"]?>" href="?action=export"> 4 - Export Result</a>
    </div>
  </div>
  <div id="collapseUpload" class="collapse" aria-labelledby="heading" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">1 Upload Image</h6>
      <a class="collapse-item" href="buttons.html">Upload Image</a>
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
