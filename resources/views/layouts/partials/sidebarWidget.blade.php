<!-- Sidebar section -->
<div class="col-lg-4">
    <div class="sidebar pl-xl-3">

        <!-- Widget banner -->
        @if (Request::path() == 'cryptocurrency')
            <div class="widget">
                <iframe src="https://www.widgets.investing.com/top-cryptocurrencies?theme=lightTheme" width="100%"
                    height="600" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
                <div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;">Powered by <a
                        href="https://www.investing.com?utm_source=WMT&amp;utm_medium=referral&amp;utm_campaign=LIVE_CURRENCY_X_RATES&amp;utm_content=Footer%20Link"
                        target="_blank" rel="nofollow">Investing.com</a></div>
            </div>
        @else
            <div class="widget">
                <iframe
                    src="https://www.widgets.investing.com/live-currency-cross-rates?theme=lightTheme&roundedCorners=true"
                    width="100%" height="600" frameborder="0" allowtransparency="true" marginwidth="0"
                    marginheight="0"></iframe>
                <div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;">Powered by <a
                        href="https://www.investing.com?utm_source=WMT&amp;utm_medium=referral&amp;utm_campaign=LIVE_CURRENCY_X_RATES&amp;utm_content=Footer%20Link"
                        target="_blank" rel="nofollow">Investing.com</a></div>
            </div>
        @endif

        <!-- Widget recent news -->
        <div class="widget">
            <h5 class="widget-title section-title-3 font-weight-700 text-left">Recent News
                {{ Str::ucfirst($category) }}</h5>
            <ul class="recent-blogs">
                @foreach ($articleList as $list)
                    <li class="pb-4 mb-3">
                        <div class="media">
                            <div class="media-body">
                                <h6 class="blog-title font-italic mb-1">
                                    <a href="#">{{ $list->title }}</a>
                                </h6>
                                <ul class="meta-entry mb-3">
                                    <li class="meta-entry-item">
                                        <span>{{ $list->created_at }}</span>
                                    </li>
                                    <li class="meta-entry-item">
                                        <span>{{ $list->editor }}</span>
                                    </li>
                                </ul>
                                <p class="mb-0">Aliquam aptent nec sociosqu litora semper
                                    malesuada</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Widget categories -->
        <div class="widget">
            <h5 class="widget-title section-title-3 font-weight-700 text-left">Categories</h5>
            <ul class="list-unstyled mb-0">
                @foreach ($categoryList as $item)
                    <li class="mb-3">
                        <a href="#" class="text-dark-gray">{{ $item->name }}</a>
                        <span class="badge badge-pill badge-light shadow-sm ml-2"></span>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
</div>
