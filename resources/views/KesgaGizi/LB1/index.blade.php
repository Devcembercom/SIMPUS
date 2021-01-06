<x-app-layout>
    <x-slot name="header">
        {{ __('Identitas Persalinan') }}
    </x-slot>
    <x-slot name="button">
        <a href="{{ route('identitas-persalinan.create') }}" class="float-right btn btn-primary">Tambah Data</a>
    </x-slot>
    <x-card>
        <button onclick="toggleFullScreen ();">Klik disini</button>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item"
                src="https://docs.google.com/spreadsheets/d/1dKUUSo_2cPaoWB4Y4UH8rqK1ykdcqLvOJzLiZFwDtGE/edit?usp=sharing&amp;headers=false"></iframe>
        </div>
    </x-card>
    @push('js')
    <script type="text/javascript">
        function toggleFullScreen() {
          if ((document.fullScreenElement && document.fullScreenElement !== null) ||
           (!document.mozFullScreen && !document.webkitIsFullScreen)) {
            if (document.documentElement.requestFullScreen) {
              document.documentElement.requestFullScreen();
            } else if (document.documentElement.mozRequestFullScreen) {
              document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullScreen) {
              document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
            }
          } else {
            if (document.cancelFullScreen) {
              document.cancelFullScreen();
            } else if (document.mozCancelFullScreen) {
              document.mozCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
              document.webkitCancelFullScreen();
            }
          }
        }
    </script>
    @endpush
</x-app-layout>
