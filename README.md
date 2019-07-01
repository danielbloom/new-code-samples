## Boring code doing exciting things


Some things to note:

- We put ```declare(strict_types=1);``` at the top of every PHP file and all method params and return values are type hinted
- We use Symfony and yaml for dependency injection
- Everything has an interface. The underlying implementation can be switched out without any effect on components interacting with the interface.
- This code returns a JSON response of data on a collection of communities. The shape of a community object is defined in the [Community class](https://github.com/danielbloom/new-code-samples/blob/master/src/Community.php). Each element has its own type, while elements that contain nested data, such as collections of other objects, have their types defined by that nested object's class and interface. For example 
    ```
    /** @var Image\MapInterface */
    protected $photos;
    ``` 
- [Builder methods](https://github.com/danielbloom/new-code-samples/blob/master/src/Community/Builder.php#L26) convert data, in this case database records, into the expected response shape, traversing down into any nested data types.
