<h3 class="widget-title">Compare</h3>
<div class="tab-content">

    <div class="row" id="compare">
        <div class="col-xs-6">
            <ul>
                <li>
                    <div>
                        <form class="search-it compare">
                            <button type="submit" class="search-button"></button>
                            <input type="text" tabindex="1" class="search-line typeahead" placeholder="search">
                            <input type="hidden" class="hidden-q" name="q">
                        </form>
                    </div>
                    <br/><br/>

                    <div id="div">
                        <script id="compare-template" type="text/x-handlebars-template">
                            @include('templates.compare-template')
                        </script>
                    </div>

                </li>
            </ul>
        </div>

        <div class="col-xs-6">
            <ul>
                <li>
                    <div>
                        <form class="search-it compare">
                            <button type="submit" class="search-button"></button>
                            <input type="text" tabindex="2" class="search-line typeahead" placeholder="search">
                            <input type="hidden" class="hidden-q" name="q">
                        </form>
                    </div>
                    <br/><br/>

                    <div class="div">
                        <script id="compare-template" type="text/x-handlebars-template">
                            @include('templates.compare-template')
                        </script>
                    </div>

                </li>
            </ul>
        </div>

    </div>

</div>