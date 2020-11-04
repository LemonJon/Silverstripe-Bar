<!-- Content -->
<main role="main">
    
    <!-- Articles -->
    <div class="container">
      <div class="textContainer">
        <div class="mainText">
          <h1>Welcome to stereo club</h1>
          $Content      
        </div>
      </div>
      
        <div class="row">
            <% loop $ProductArticles %>
            <div class="col-md-4">
              <div class="card cardCustom" style="width: 18rem;">
                <div class=imgWrap>
                  <div class="inner">     
                    <div class="inner">
                      <% with $Photo %>
                        <img src="$URL" class="card-img-top" alt="$Title" style='object-fit: contain'/>
                      <% end_with %>
                      <div class="imgText">
                          <h5>$$Price</h5>
                          <p>$Ingredients</p>
                      </div>
                  </div>
                  </div>
                </div>
                  <div class="card-body">
                      <h5 class="card-title">$Title</h5>
                      <p class="card-text">$Description</p>
                  </div>
              </div>
          </div>
          <% end_loop %>
        </div>
        <!-- BEGIN PAGINATION -->
        <div class="pagination">
          <% if $ProductArticles.MoreThanOnePage %>
            <% if $ProductArticles.NotFirstPage %>
                <a class="prev" href="$ProductArticles.PrevLink">Previous</a>
            <% end_if %>
            <% loop $ProductArticles.PaginationSummary %>
                <% if $CurrentBool %>
                    $PageNum
                <% else %>
                    <% if $Link %>
                        <a href="$Link">$PageNum</a>
                    <% else %>
                        ...
                    <% end_if %>
                <% end_if %>
            <% end_loop %>
            <% if $ProductArticles.NotLastPage %>
                <a class="next" href="$ProductArticles.NextLink">Next</a>
            <% end_if %>
        <% end_if %>
      </div>
    <!-- END PAGINATION -->
      </div>
      <!-- END Articles -->
    
    </main>
    <!-- END Content -->