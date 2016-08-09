# archivedorders
Archived Orders in Magento


Still loads to do and improve. It contains a basic structure for creating an additional table that displays archived order data in Magento. It would be a useful building block for a more complete extension.

The use case of this extension would be when you don't want to go through the hassel of importing large amounts of orders from another Magento store or other ecommerce platform into the Magento order tables, but you still want the customer to be able to see this data in a flat table.




--------------

### Installing this extension
```
modman clone https://github.com/luismarciano/archivedorders.git
```

### System Configuration
A new section under the System -> Configuration -> Sales tab is added called “Archived Orders". In this section you can enable/disable configure the text messaging displayed.



### Database table format

There is a very generic flat table created by this extension that you can modify the structure of for your own custom data structure. To change the columns edit:
app/code/community/Luisdesign/ArchivedOrders/sql/luisdesign_archivedorders_setup/mysql4-install-1.0.0.php

--------------

--------------

#### The MIT License

Copyright 2016 - Luis Mota, All Rights Reserved

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
