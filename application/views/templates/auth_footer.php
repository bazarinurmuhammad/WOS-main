<script>
        var hostUrl = "<?= base_url('assets/'); ?>";
    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="<?= base_url('assets/'); ?>plugins/global/plugins.bundle.js"></script>
    <script src="<?= base_url('assets/'); ?>js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="<?= base_url('assets/'); ?>js/custom/authentication/sign-in/general.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>