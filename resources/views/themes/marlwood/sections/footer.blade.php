<footer class="bg-dark text-light py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h5 class="mb-3">Marlwood School</h5>
                <p>Vattingstone Lane,<br />
                    Alveston,<br />
                    South Gloucestershire,<br />
                    BS35 3LA
                </p>
            </div>
            <div class="col">
                <nav class="nav flex-column">
                    <a href="tel:01454862525" class="nav-link">
                        <font-awesome-icon :icon="['fas', 'phone']" class="mr-2"></font-awesome-icon>
                        01454 862525
                    </a>
                    <a href="fax:01454862550" class="nav-link">
                        <font-awesome-icon :icon="['fas', 'fax']" class="mr-2"></font-awesome-icon>
                        01454 862550
                    </a>
                    <a href="mailto:MarlwoodSchool@CSET.co.uk" class="nav-link">
                        <font-awesome-icon :icon="['fas', 'at']" class="mr-2"></font-awesome-icon>
                        MarlwoodSchool@CSET.co.uk
                    </a>
            </div>
            <div class="col">
                {{-- <p class="mb-0 px-3 py-2" rel="copyright"></p> --}}
                {!! PageBuilder::menu('footer', ['view' => 'vertical']) !!}
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col">
                <p class="mb-0">
                    <span rel="copyright">&copy; {!! date("Y") !!} {!! PageBuilder::block('copyright') !!}.</span>
                    <span class="text-muted">This website is run and maintained by {!! HTML::link('https://benargo.com', 'Ben Argo', ['rel' => 'author']) !!} independently of Marlwood School/CSET.</span>
                </p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</footer>
</div><!-- /#app -->

<script src="{!! PageBuilder::js('app') !!}"></script>
@yield('scripts')

{!! PageBuilder::block('footer_html', ['source' => true]) !!}

</body>
</html>
