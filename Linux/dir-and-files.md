## [] Used for define user define folder/file name

---

## For remove directory and files

### `rm -r [directory name]`

## For search and remove files recursively start with specific pattern [._]

### `find [directory name] -name "._*" -type f -print0| xargs -0 \rm -rf`


## For copy directory and files

### `cp -r [directory name]`


## For move directory and files

### `mv -r [directory name]`

---

## For create symlink

### `ln -s [Original/target folder name] [Shortcut/link folder name]`


---

## Parameter uses for zip

### `x –  Extract files`

### `v – Verbose, print the file names as they are extracted one by one`

### `z – The file is a “gzipped” file`

### `f – Use the following tar archive for the operation`


## Zip Command
### `tar -czvf dir.tar.gz dir`


## Unzip Command
### `tar -xvzf dir.tar.gz ` -For same name
### `tar -xvzf dir.tar.gz user_define_dir_name` -For new name



## Source Copy Command
### `wget http://example.com/file_name.extension ` -File should be in public_html
### `scp username@ip:[source] [destination]` -Source should allow destination IP
