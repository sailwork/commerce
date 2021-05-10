# Catalog Management
## Category
### Get Category List
Return a list of categories with pagination
```graphql
    query getCategories(page: $page, limit: $limit){
        categories(page:$page, limit: $limit) {
            data{
                id
                name
                description
                is_active
            }
            total
            per_page
        }
}
```
