<div class=" p-2 fixed-bottom bg-secondary">
    <div class="container">
        <span class=" btn btn-sm btn-secondary">&copy; {!! date("Y") !!} All Right Reserve</span>
        <a href="{{ route('pages.about') }}" class=" btn btn-sm btn-secondary">About</a>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        $("#accord").accordion({
            callapsible:true,
            active: 0,
            heightStyle:'content',
        });
    });
</script>
