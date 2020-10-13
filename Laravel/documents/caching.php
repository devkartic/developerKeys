<?php
/*
Question: Does Laravel support caching?
Answer :
    Yes, Laravel supports popular caching backend like Memcached and Redis.

    By default, Laravel is configured to use the file cache driver, which stores the serialized,
    cached objects in the file system.For large projects, it is recommended to use Memcached or Redis.