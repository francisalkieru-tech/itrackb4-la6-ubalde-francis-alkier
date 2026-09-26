Q1. You added a second filter without adding a single route. Explain why no new route was needed. Your answer should say something about what the router actually looks at.
Answer: no new route needed becuase both filter use the same data path, the mainly router looks at the url path when macthing a route, while the category and stock value after array query parameters handled by the controller.

Q2. Suppose you had built both filters as route parameters instead. Describe what the URL for 'year 4 only, no course filter' would have to look like, and why.
Answer: if the both filters were route parameter the url have 4 only and no course filter so it could be something like student/all/4 which all means that no course filter is selected, while 4 means year 4. it needs to be there beacuse route parameters are part of the URL path.

Q3.Your navigation link stays marked on a detail page and also when a filter is applied. Only one of those two needed a change to your pattern. Say which one, and why the other needed nothing.
Answer: the detail page needed the change because the URL becomes something like /products/1, so I used products* to also match the longer path. The filter did not need another change because the filter is in the query string, and request only checks the path.

Q4. You deleted your old filter method but kept the empty store and update methods, even though none of the three can be reached by a URL. Explain the difference between them.
Answer: I deleted the old filter method because the filtering is now handled by the index method, so the old method is no longer needed. The empty store and update methods are different because they are Laravel resource methods that can still be used later if I add product creation and updating.
