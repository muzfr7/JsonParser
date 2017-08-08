<?php

namespace AboutYou\Repository;

/**
 * Class AbstractRepository
 */
abstract class AbstractRepository
{
    /**
     * Path to Data source
     *
     * TODO: Data source path could be moved to some configuration file.
     */
    private $path = __DIR__ . "/../../../data/17325.json";

    /**
     * Data Loader
     *
     * TODO: LoadData() function could be moved to some helper class.
     *   
     * @return JSONArray
     *
     * @throws Exception if data source not found
     */
    public function loadData()
    {
        if (file_exists($this->path)) 
        {
            return json_decode(file_get_contents($this->path), true);
        }
        else{
            // I may log this this exception in production env rather than throwing it.
            throw new \Exception(sprintf('Given data source not found at [%s].', $this->path));
        }
    }
}