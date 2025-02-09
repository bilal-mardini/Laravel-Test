<!-- SCRIPTS -->
<!-- SCROLL-TO-TOP -->
<div class="scrollToTop">
    <span class="arrow"><i class="ri-arrow-up-s-fill text-xl"></i></span>
</div>
<div id="responsive-overlay"></div>
<!-- JQUERY -->
<script src="{{ asset('build/assets/JQuery/jquery-3.7.1.min.js') }}"></script>

<!-- POPPER JS -->
<script src="{{ asset('build/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

<!-- NODE WAVES JS -->
<script src="{{ asset('build/assets/libs/node-waves/waves.min.js') }}"></script>

<!-- COLOR PICKER JS -->
<script src="{{ asset('build/assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

<!-- SWITCH JS -->
<script src="{{ asset('build/assets/switch.js') }}"></script>

<!-- PRELINE JS -->
<script src="{{ asset('build/assets/libs/preline/preline.js') }}"></script>

<!-- SIMPLEBAR JS -->
<script src="{{ asset('build/assets/libs/simplebar/simplebar.min.js') }}"></script>

<!-- STICKY JS -->
<script src="{{ asset('build/assets/sticky.js') }}"></script>

<!-- APP JS -->
<link rel="modulepreload" href="{{ asset('build/assets/app-23e8aa1f.js') }}" />
<script type="module" src="{{ asset('build/assets/app-23e8aa1f.js') }}"></script>

<!-- CUSTOM-SWITCHER JS -->
<link rel="modulepreload" href="{{ asset('build/assets/custom-switcher-c2a0a9d1.js') }}" />
<script type="module" src="{{ asset('build/assets/custom-switcher-c2a0a9d1.js') }}"></script>

<!-- TOASTR-->
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<!-- jsvalidation -->
<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

    <!-- SWEET ALERT -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif
    @if (Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @endif
    @if (Session::has('warning'))
        toastr.warning("{{ Session::get('warning') }}");
    @endif
    @if (Session::has('info'))
        toastr.info("{{ Session::get('info') }}");
    @endif
</script>

<script>
    function showDeleteConfirmation(message, itemId) {
        Swal.fire({
            title: message,
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            cancelButtonColor: '#d33',
            cancelButtonText: 'الغاء',
            confirmButtonText: 'تأكيد'
        }).then((result) => {
            if (result.isConfirmed) {
                deleteItem(itemId);
            }
        });
    }
    function deleteItem(itemId) {
        document.getElementById('delete-form-' + itemId).submit();
    }
</script>
<script>
    $(document).ready(function() {
        $(document).on('change', 'input[type="checkbox"].ti-switch', function() {
            var itemId = $(this).data('item-id');
            var checked = $(this).is(':checked');
            var route = $(this).data('route');
            $.ajax({
                url: route,
                type: 'POST',
                data: {
                    id: itemId,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    console.log(response);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>

<!-- END SCRIPTS -->
