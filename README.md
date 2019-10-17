# <center>拼多多开放平台API SDK</center>

## 要求

- PHP >= 7.0
- Composer
- ext-curl 扩展
- ext-json 扩展

## 安装

```php
composer require makerlin96/pinduoduo-sdk
```

## 使用

```php
use makerlin96\pinduoduoSDK
class IndexController 
{
  private $clientId = 'xxxxxxxxxx';
  private $clientSecret = 'xxxxxxxxxx';
  public function index()
  {
    $client = new HttpClient($this->clientId,$this->clientSecret);
    $request = new PddDdkGoodsSearchRequest();
    $request->setPage = 1;
    $request->setPageSize = 10;
    $response = $client->syncInvoke($request);
    var_dump($response);
  }
}
```

## 文档

[拼多多开放平台](https://open.pinduoduo.com/)

## License

MIT