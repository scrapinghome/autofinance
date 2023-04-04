<?php
/**
 * created by: tushar Khan
 * email : tushar.khan0122@gmail.com
 * date : 4/5/2023
 */
?>

<script>
    var capitol_input = $('#capitol_input');
    var capitol_select = $('#capitol_select');
    var month_input = $('#month_input');
    var month_select = $('#month_select');
    var strategy_select = $('#strategy_select');
    var result = $('#result');

    capitol_select.on('change', function () {
        capitol_input.val(capitol_select.val());
        callAPI();
    });

    month_select.on('change', function () {
        month_input.val(month_select.val());
        callAPI();
    });

    strategy_select.on('change', function () {
        callAPI();
    });

    capitol_input.on('change', function () {
        callAPI();
    });

    month_input.on('change', function () {
        callAPI();
    });

    function checkAllInputIsFilled() {
        console.log(strategy_select.val());
        if (
            capitol_input.val() == '' ||
            capitol_input.val() == null ||
            month_input.val() == '' ||
            month_input.val() == null ||
            strategy_select.val() == '' ||
            strategy_select.val() == null
        ) {
            return false;
        }
        return true;
    }

    function callAPI() {
        if (checkAllInputIsFilled()) {
            let url = '{{ route("calculate-growth") }}';
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    capitol: capitol_input.val(),
                    month: month_input.val(),
                    strategy: strategy_select.val(),
                },
                success: function (data) {
                    result.val(data.data.profit);
                },
                error: function () {
                    alert('Error');
                }
            });
        }
    }
</script>
