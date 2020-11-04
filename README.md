# File Renamer Class

File Renamer Class is a php class for renaming files in a directory Without changing extensions. (My First Oop project)

## Installation

Clone the [repo](https://github.com/albinvar/File-Renamer-Class.git) and configure your settings in index.php

``` git clone https://github.com/albinvar/File-Renamer-Class.git ```

## Usage

Add the library to you index.php 

``` require 'Renamer.php'; ```

Create new object using a prefix & the directory name.

``` $object = new Renamer('prefix here', 'upload/'); ```

Get all files in the directory in the fom of array using getFiles().

``` $object->getFiles(); ```

Launch Renamer Class using launch()

``` $object->launch(); ```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://github.com/albinvar/File-Renamer-Class/blob/main/LICENSE)
