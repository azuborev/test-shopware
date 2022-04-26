<?php

namespace ContainerZCrw1Xw;


include_once \dirname(__DIR__, 4).'/vendor/elasticsearch/elasticsearch/src/Elasticsearch/Client.php';
class Client_dba3ed3 extends \Elasticsearch\Client implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderdc7c6 = null;
    private $initializerbd6a0 = null;
    private static $publicProperties77c5a = [
        'transport' => true,
    ];
    public function bulk(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'bulk', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->bulk($params);
    }
    public function clearScroll(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'clearScroll', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->clearScroll($params);
    }
    public function closePointInTime(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'closePointInTime', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->closePointInTime($params);
    }
    public function count(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'count', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->count($params);
    }
    public function create(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'create', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->create($params);
    }
    public function delete(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'delete', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->delete($params);
    }
    public function deleteByQuery(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'deleteByQuery', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->deleteByQuery($params);
    }
    public function deleteByQueryRethrottle(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'deleteByQueryRethrottle', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->deleteByQueryRethrottle($params);
    }
    public function deleteScript(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'deleteScript', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->deleteScript($params);
    }
    public function exists(array $params = []) : bool
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'exists', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->exists($params);
    }
    public function existsSource(array $params = []) : bool
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'existsSource', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->existsSource($params);
    }
    public function explain(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'explain', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->explain($params);
    }
    public function fieldCaps(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'fieldCaps', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->fieldCaps($params);
    }
    public function get(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'get', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->get($params);
    }
    public function getScript(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getScript', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getScript($params);
    }
    public function getScriptContext(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getScriptContext', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getScriptContext($params);
    }
    public function getScriptLanguages(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getScriptLanguages', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getScriptLanguages($params);
    }
    public function getSource(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getSource', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getSource($params);
    }
    public function index(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'index', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->index($params);
    }
    public function info(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'info', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->info($params);
    }
    public function mget(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'mget', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->mget($params);
    }
    public function msearch(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'msearch', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->msearch($params);
    }
    public function msearchTemplate(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'msearchTemplate', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->msearchTemplate($params);
    }
    public function mtermvectors(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'mtermvectors', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->mtermvectors($params);
    }
    public function openPointInTime(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'openPointInTime', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->openPointInTime($params);
    }
    public function ping(array $params = []) : bool
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'ping', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->ping($params);
    }
    public function putScript(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'putScript', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->putScript($params);
    }
    public function rankEval(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'rankEval', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->rankEval($params);
    }
    public function reindex(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'reindex', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->reindex($params);
    }
    public function reindexRethrottle(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'reindexRethrottle', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->reindexRethrottle($params);
    }
    public function renderSearchTemplate(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'renderSearchTemplate', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->renderSearchTemplate($params);
    }
    public function scriptsPainlessExecute(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'scriptsPainlessExecute', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->scriptsPainlessExecute($params);
    }
    public function scroll(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'scroll', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->scroll($params);
    }
    public function search(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'search', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->search($params);
    }
    public function searchMvt(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'searchMvt', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->searchMvt($params);
    }
    public function searchShards(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'searchShards', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->searchShards($params);
    }
    public function searchTemplate(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'searchTemplate', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->searchTemplate($params);
    }
    public function termsEnum(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'termsEnum', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->termsEnum($params);
    }
    public function termvectors(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'termvectors', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->termvectors($params);
    }
    public function update(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'update', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->update($params);
    }
    public function updateByQuery(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'updateByQuery', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->updateByQuery($params);
    }
    public function updateByQueryRethrottle(array $params = [])
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'updateByQueryRethrottle', array('params' => $params), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->updateByQueryRethrottle($params);
    }
    public function asyncSearch() : \Elasticsearch\Namespaces\AsyncSearchNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'asyncSearch', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->asyncSearch();
    }
    public function autoscaling() : \Elasticsearch\Namespaces\AutoscalingNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'autoscaling', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->autoscaling();
    }
    public function cat() : \Elasticsearch\Namespaces\CatNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'cat', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->cat();
    }
    public function ccr() : \Elasticsearch\Namespaces\CcrNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'ccr', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->ccr();
    }
    public function cluster() : \Elasticsearch\Namespaces\ClusterNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'cluster', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->cluster();
    }
    public function danglingIndices() : \Elasticsearch\Namespaces\DanglingIndicesNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'danglingIndices', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->danglingIndices();
    }
    public function dataFrameTransformDeprecated() : \Elasticsearch\Namespaces\DataFrameTransformDeprecatedNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'dataFrameTransformDeprecated', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->dataFrameTransformDeprecated();
    }
    public function enrich() : \Elasticsearch\Namespaces\EnrichNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'enrich', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->enrich();
    }
    public function eql() : \Elasticsearch\Namespaces\EqlNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'eql', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->eql();
    }
    public function features() : \Elasticsearch\Namespaces\FeaturesNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'features', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->features();
    }
    public function fleet() : \Elasticsearch\Namespaces\FleetNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'fleet', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->fleet();
    }
    public function graph() : \Elasticsearch\Namespaces\GraphNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'graph', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->graph();
    }
    public function ilm() : \Elasticsearch\Namespaces\IlmNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'ilm', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->ilm();
    }
    public function indices() : \Elasticsearch\Namespaces\IndicesNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'indices', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->indices();
    }
    public function ingest() : \Elasticsearch\Namespaces\IngestNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'ingest', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->ingest();
    }
    public function license() : \Elasticsearch\Namespaces\LicenseNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'license', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->license();
    }
    public function logstash() : \Elasticsearch\Namespaces\LogstashNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'logstash', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->logstash();
    }
    public function migration() : \Elasticsearch\Namespaces\MigrationNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'migration', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->migration();
    }
    public function ml() : \Elasticsearch\Namespaces\MlNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'ml', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->ml();
    }
    public function monitoring() : \Elasticsearch\Namespaces\MonitoringNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'monitoring', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->monitoring();
    }
    public function nodes() : \Elasticsearch\Namespaces\NodesNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'nodes', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->nodes();
    }
    public function rollup() : \Elasticsearch\Namespaces\RollupNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'rollup', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->rollup();
    }
    public function searchableSnapshots() : \Elasticsearch\Namespaces\SearchableSnapshotsNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'searchableSnapshots', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->searchableSnapshots();
    }
    public function security() : \Elasticsearch\Namespaces\SecurityNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'security', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->security();
    }
    public function shutdown() : \Elasticsearch\Namespaces\ShutdownNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'shutdown', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->shutdown();
    }
    public function slm() : \Elasticsearch\Namespaces\SlmNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'slm', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->slm();
    }
    public function snapshot() : \Elasticsearch\Namespaces\SnapshotNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'snapshot', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->snapshot();
    }
    public function sql() : \Elasticsearch\Namespaces\SqlNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'sql', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->sql();
    }
    public function ssl() : \Elasticsearch\Namespaces\SslNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'ssl', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->ssl();
    }
    public function tasks() : \Elasticsearch\Namespaces\TasksNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'tasks', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->tasks();
    }
    public function textStructure() : \Elasticsearch\Namespaces\TextStructureNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'textStructure', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->textStructure();
    }
    public function transform() : \Elasticsearch\Namespaces\TransformNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'transform', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->transform();
    }
    public function watcher() : \Elasticsearch\Namespaces\WatcherNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'watcher', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->watcher();
    }
    public function xpack() : \Elasticsearch\Namespaces\XpackNamespace
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'xpack', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->xpack();
    }
    public function __call(string $name, array $arguments)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__call', array('name' => $name, 'arguments' => $arguments), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->__call($name, $arguments);
    }
    public function extractArgument(array &$params, string $arg)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'extractArgument', array('params' => $params, 'arg' => $arg), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->extractArgument($params, $arg);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->transport, $instance->params, $instance->endpoints, $instance->registeredNamespaces, $instance->asyncSearch, $instance->autoscaling, $instance->cat, $instance->ccr, $instance->cluster, $instance->danglingIndices, $instance->dataFrameTransformDeprecated, $instance->enrich, $instance->eql, $instance->features, $instance->fleet, $instance->graph, $instance->ilm, $instance->indices, $instance->ingest, $instance->license, $instance->logstash, $instance->migration, $instance->ml, $instance->monitoring, $instance->nodes, $instance->rollup, $instance->searchableSnapshots, $instance->security, $instance->shutdown, $instance->slm, $instance->snapshot, $instance->sql, $instance->ssl, $instance->tasks, $instance->textStructure, $instance->transform, $instance->watcher, $instance->xpack);
        $instance->initializerbd6a0 = $initializer;
        return $instance;
    }
    public function __construct(\Elasticsearch\Transport $transport, callable $endpoint, array $registeredNamespaces)
    {
        static $reflection;
        if (! $this->valueHolderdc7c6) {
            $reflection = $reflection ?? new \ReflectionClass('Elasticsearch\\Client');
            $this->valueHolderdc7c6 = $reflection->newInstanceWithoutConstructor();
        unset($this->transport, $this->params, $this->endpoints, $this->registeredNamespaces, $this->asyncSearch, $this->autoscaling, $this->cat, $this->ccr, $this->cluster, $this->danglingIndices, $this->dataFrameTransformDeprecated, $this->enrich, $this->eql, $this->features, $this->fleet, $this->graph, $this->ilm, $this->indices, $this->ingest, $this->license, $this->logstash, $this->migration, $this->ml, $this->monitoring, $this->nodes, $this->rollup, $this->searchableSnapshots, $this->security, $this->shutdown, $this->slm, $this->snapshot, $this->sql, $this->ssl, $this->tasks, $this->textStructure, $this->transform, $this->watcher, $this->xpack);
        }
        $this->valueHolderdc7c6->__construct($transport, $endpoint, $registeredNamespaces);
    }
    public function & __get($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__get', ['name' => $name], $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        if (isset(self::$publicProperties77c5a[$name])) {
            return $this->valueHolderdc7c6->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        if (isset(self::$publicProperties77c5a[$name])) {
            return ($this->valueHolderdc7c6->$name = $value);
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__isset', array('name' => $name), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        if (isset(self::$publicProperties77c5a[$name])) {
            return isset($this->valueHolderdc7c6->$name);
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__unset', array('name' => $name), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        if (isset(self::$publicProperties77c5a[$name])) {
            unset($this->valueHolderdc7c6->$name);
            return;
        }
        $realInstanceReflection = new \ReflectionClass('Elasticsearch\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__clone', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6 = clone $this->valueHolderdc7c6;
    }
    public function __sleep()
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__sleep', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return array('valueHolderdc7c6');
    }
    public function __wakeup()
    {
        unset($this->transport, $this->params, $this->endpoints, $this->registeredNamespaces, $this->asyncSearch, $this->autoscaling, $this->cat, $this->ccr, $this->cluster, $this->danglingIndices, $this->dataFrameTransformDeprecated, $this->enrich, $this->eql, $this->features, $this->fleet, $this->graph, $this->ilm, $this->indices, $this->ingest, $this->license, $this->logstash, $this->migration, $this->ml, $this->monitoring, $this->nodes, $this->rollup, $this->searchableSnapshots, $this->security, $this->shutdown, $this->slm, $this->snapshot, $this->sql, $this->ssl, $this->tasks, $this->textStructure, $this->transform, $this->watcher, $this->xpack);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbd6a0 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbd6a0;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'initializeProxy', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdc7c6;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdc7c6;
    }
}

if (!\class_exists('Client_dba3ed3', false)) {
    \class_alias(__NAMESPACE__.'\\Client_dba3ed3', 'Client_dba3ed3', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Plugin/Composer/CommandExecutor.php';
class CommandExecutor_2fbbc6d extends \Shopware\Core\Framework\Plugin\Composer\CommandExecutor implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderdc7c6 = null;
    private $initializerbd6a0 = null;
    private static $publicProperties77c5a = [
        
    ];
    public function require(string $pluginComposerName, string $pluginName) : void
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'require', array('pluginComposerName' => $pluginComposerName, 'pluginName' => $pluginName), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6->require($pluginComposerName, $pluginName);
return;
    }
    public function remove(string $pluginComposerName, string $pluginName) : void
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'remove', array('pluginComposerName' => $pluginComposerName, 'pluginName' => $pluginName), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6->remove($pluginComposerName, $pluginName);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Plugin\Composer\CommandExecutor $instance) {
            unset($instance->application, $instance->projectDir);
        }, $instance, 'Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor')->__invoke($instance);
        $instance->initializerbd6a0 = $initializer;
        return $instance;
    }
    public function __construct(string $projectDir)
    {
        static $reflection;
        if (! $this->valueHolderdc7c6) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
            $this->valueHolderdc7c6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Plugin\Composer\CommandExecutor $instance) {
            unset($instance->application, $instance->projectDir);
        }, $this, 'Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor')->__invoke($this);
        }
        $this->valueHolderdc7c6->__construct($projectDir);
    }
    public function & __get($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__get', ['name' => $name], $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        if (isset(self::$publicProperties77c5a[$name])) {
            return $this->valueHolderdc7c6->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__isset', array('name' => $name), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__unset', array('name' => $name), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__clone', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6 = clone $this->valueHolderdc7c6;
    }
    public function __sleep()
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__sleep', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return array('valueHolderdc7c6');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Shopware\Core\Framework\Plugin\Composer\CommandExecutor $instance) {
            unset($instance->application, $instance->projectDir);
        }, $this, 'Shopware\\Core\\Framework\\Plugin\\Composer\\CommandExecutor')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbd6a0 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbd6a0;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'initializeProxy', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdc7c6;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdc7c6;
    }
}

if (!\class_exists('CommandExecutor_2fbbc6d', false)) {
    \class_alias(__NAMESPACE__.'\\CommandExecutor_2fbbc6d', 'CommandExecutor_2fbbc6d', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Store/Services/StoreService.php';
class StoreService_93b91c4 extends \Shopware\Core\Framework\Store\Services\StoreService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderdc7c6 = null;
    private $initializerbd6a0 = null;
    private static $publicProperties77c5a = [
        
    ];
    public function fireTrackingEvent(string $eventName, array $additionalData = []) : ?array
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'fireTrackingEvent', array('eventName' => $eventName, 'additionalData' => $additionalData), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->fireTrackingEvent($eventName, $additionalData);
    }
    public function getLanguageByContext(\Shopware\Core\Framework\Context $context) : string
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getLanguageByContext', array('context' => $context), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getLanguageByContext($context);
    }
    public function updateStoreToken(\Shopware\Core\Framework\Context $context, \Shopware\Core\Framework\Store\Struct\AccessTokenStruct $accessToken) : void
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'updateStoreToken', array('context' => $context, 'accessToken' => $accessToken), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6->updateStoreToken($context, $accessToken);
return;
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Store\Services\StoreService $instance) {
            unset($instance->client, $instance->userRepository, $instance->instanceService);
        }, $instance, 'Shopware\\Core\\Framework\\Store\\Services\\StoreService')->__invoke($instance);
        $instance->initializerbd6a0 = $initializer;
        return $instance;
    }
    public function & __get($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__get', ['name' => $name], $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        if (isset(self::$publicProperties77c5a[$name])) {
            return $this->valueHolderdc7c6->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__isset', array('name' => $name), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__unset', array('name' => $name), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Store\\Services\\StoreService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__clone', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6 = clone $this->valueHolderdc7c6;
    }
    public function __sleep()
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__sleep', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return array('valueHolderdc7c6');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Shopware\Core\Framework\Store\Services\StoreService $instance) {
            unset($instance->client, $instance->userRepository, $instance->instanceService);
        }, $this, 'Shopware\\Core\\Framework\\Store\\Services\\StoreService')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbd6a0 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbd6a0;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'initializeProxy', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdc7c6;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdc7c6;
    }
}

if (!\class_exists('StoreService_93b91c4', false)) {
    \class_alias(__NAMESPACE__.'\\StoreService_93b91c4', 'StoreService_93b91c4', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Webhook/Hookable/HookableEventFactory.php';
class HookableEventFactory_f62e15e extends \Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderdc7c6 = null;
    private $initializerbd6a0 = null;
    private static $publicProperties77c5a = [
        
    ];
    public function createHookablesFor($event) : array
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'createHookablesFor', array('event' => $event), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->createHookablesFor($event);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory $instance) {
            unset($instance->eventEncoder, $instance->writeResultMerger);
        }, $instance, 'Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory')->__invoke($instance);
        $instance->initializerbd6a0 = $initializer;
        return $instance;
    }
    public function __construct(\Shopware\Core\Framework\Webhook\BusinessEventEncoder $eventEncoder, \Shopware\Core\Framework\Webhook\Hookable\WriteResultMerger $writeResultMerger)
    {
        static $reflection;
        if (! $this->valueHolderdc7c6) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
            $this->valueHolderdc7c6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory $instance) {
            unset($instance->eventEncoder, $instance->writeResultMerger);
        }, $this, 'Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory')->__invoke($this);
        }
        $this->valueHolderdc7c6->__construct($eventEncoder, $writeResultMerger);
    }
    public function & __get($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__get', ['name' => $name], $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        if (isset(self::$publicProperties77c5a[$name])) {
            return $this->valueHolderdc7c6->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__isset', array('name' => $name), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__unset', array('name' => $name), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__clone', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6 = clone $this->valueHolderdc7c6;
    }
    public function __sleep()
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__sleep', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return array('valueHolderdc7c6');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Shopware\Core\Framework\Webhook\Hookable\HookableEventFactory $instance) {
            unset($instance->eventEncoder, $instance->writeResultMerger);
        }, $this, 'Shopware\\Core\\Framework\\Webhook\\Hookable\\HookableEventFactory')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbd6a0 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbd6a0;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'initializeProxy', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdc7c6;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdc7c6;
    }
}

if (!\class_exists('HookableEventFactory_f62e15e', false)) {
    \class_alias(__NAMESPACE__.'\\HookableEventFactory_f62e15e', 'HookableEventFactory_f62e15e', false);
}

include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/ExtendableInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/CloneTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/JsonSerializableTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/AssignArrayTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/ExtendableTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/CreateFromTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/VariablesAccessTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/Struct.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/Framework/Struct/Collection.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/core/System/Snippet/Files/SnippetFileCollection.php';
class SnippetFileCollection_08f09cc extends \Shopware\Core\System\Snippet\Files\SnippetFileCollection implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderdc7c6 = null;
    private $initializerbd6a0 = null;
    private static $publicProperties77c5a = [
        
    ];
    public function add($snippetFile) : void
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'add', array('snippetFile' => $snippetFile), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6->add($snippetFile);
return;
    }
    public function get($key) : ?\Shopware\Core\System\Snippet\Files\SnippetFileInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'get', array('key' => $key), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->get($key);
    }
    public function getByName($key) : ?\Shopware\Core\System\Snippet\Files\SnippetFileInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getByName', array('key' => $key), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getByName($key);
    }
    public function getFilesArray(bool $isBase = true) : array
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getFilesArray', array('isBase' => $isBase), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getFilesArray($isBase);
    }
    public function toArray() : array
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'toArray', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->toArray();
    }
    public function getIsoList() : array
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getIsoList', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getIsoList();
    }
    public function getSnippetFilesByIso(string $iso) : array
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getSnippetFilesByIso', array('iso' => $iso), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getSnippetFilesByIso($iso);
    }
    public function getBaseFileByIso(string $iso) : \Shopware\Core\System\Snippet\Files\SnippetFileInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getBaseFileByIso', array('iso' => $iso), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getBaseFileByIso($iso);
    }
    public function getApiAlias() : string
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getApiAlias', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getApiAlias();
    }
    public function hasFileForPath(string $filePath) : bool
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'hasFileForPath', array('filePath' => $filePath), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->hasFileForPath($filePath);
    }
    public function set($key, $element) : void
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'set', array('key' => $key, 'element' => $element), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6->set($key, $element);
return;
    }
    public function clear() : void
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'clear', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6->clear();
return;
    }
    public function count() : int
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'count', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->count();
    }
    public function getKeys() : array
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getKeys', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getKeys();
    }
    public function has($key) : bool
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'has', array('key' => $key), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->has($key);
    }
    public function map(\Closure $closure) : array
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'map', array('closure' => $closure), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->map($closure);
    }
    public function reduce(\Closure $closure, $initial = null)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'reduce', array('closure' => $closure, 'initial' => $initial), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->reduce($closure, $initial);
    }
    public function fmap(\Closure $closure) : array
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'fmap', array('closure' => $closure), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->fmap($closure);
    }
    public function sort(\Closure $closure) : void
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'sort', array('closure' => $closure), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6->sort($closure);
return;
    }
    public function filterInstance(string $class)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'filterInstance', array('class' => $class), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->filterInstance($class);
    }
    public function filter(\Closure $closure)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'filter', array('closure' => $closure), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->filter($closure);
    }
    public function slice(int $offset, ?int $length = null)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'slice', array('offset' => $offset, 'length' => $length), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->slice($offset, $length);
    }
    public function getElements() : array
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getElements', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getElements();
    }
    public function jsonSerialize() : array
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'jsonSerialize', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->jsonSerialize();
    }
    public function first()
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'first', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->first();
    }
    public function getAt(int $position)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getAt', array('position' => $position), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getAt($position);
    }
    public function last()
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'last', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->last();
    }
    public function remove($key) : void
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'remove', array('key' => $key), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6->remove($key);
return;
    }
    public function getIterator() : \Generator
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getIterator', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getIterator();
    }
    public function assign(array $options)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'assign', array('options' => $options), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->assign($options);
    }
    public function addExtension(string $name, ?\Shopware\Core\Framework\Struct\Struct $extension) : void
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'addExtension', array('name' => $name, 'extension' => $extension), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6->addExtension($name, $extension);
return;
    }
    public function addArrayExtension(string $name, array $extension) : void
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'addArrayExtension', array('name' => $name, 'extension' => $extension), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6->addArrayExtension($name, $extension);
return;
    }
    public function addExtensions(array $extensions) : void
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'addExtensions', array('extensions' => $extensions), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6->addExtensions($extensions);
return;
    }
    public function getExtension(string $name) : ?\Shopware\Core\Framework\Struct\Struct
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getExtension', array('name' => $name), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getExtension($name);
    }
    public function getExtensionOfType(string $name, string $type) : ?\Shopware\Core\Framework\Struct\Struct
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getExtensionOfType', array('name' => $name, 'type' => $type), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getExtensionOfType($name, $type);
    }
    public function hasExtension(string $name) : bool
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'hasExtension', array('name' => $name), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->hasExtension($name);
    }
    public function hasExtensionOfType(string $name, string $type) : bool
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'hasExtensionOfType', array('name' => $name, 'type' => $type), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->hasExtensionOfType($name, $type);
    }
    public function getExtensions() : array
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getExtensions', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getExtensions();
    }
    public function setExtensions(array $extensions) : void
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'setExtensions', array('extensions' => $extensions), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6->setExtensions($extensions);
return;
    }
    public function removeExtension(string $name) : void
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'removeExtension', array('name' => $name), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6->removeExtension($name);
return;
    }
    public function getVars() : array
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getVars', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getVars();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->elements, $instance->extensions);
        $instance->initializerbd6a0 = $initializer;
        return $instance;
    }
    public function __construct(iterable $elements = [])
    {
        static $reflection;
        if (! $this->valueHolderdc7c6) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
            $this->valueHolderdc7c6 = $reflection->newInstanceWithoutConstructor();
        unset($this->elements, $this->extensions);
        }
        $this->valueHolderdc7c6->__construct($elements);
    }
    public function & __get($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__get', ['name' => $name], $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        if (isset(self::$publicProperties77c5a[$name])) {
            return $this->valueHolderdc7c6->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__isset', array('name' => $name), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__unset', array('name' => $name), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Core\\System\\Snippet\\Files\\SnippetFileCollection');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__clone', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6 = clone $this->valueHolderdc7c6;
    }
    public function __sleep()
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__sleep', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return array('valueHolderdc7c6');
    }
    public function __wakeup()
    {
        unset($this->elements, $this->extensions);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbd6a0 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbd6a0;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'initializeProxy', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdc7c6;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdc7c6;
    }
}

if (!\class_exists('SnippetFileCollection_08f09cc', false)) {
    \class_alias(__NAMESPACE__.'\\SnippetFileCollection_08f09cc', 'SnippetFileCollection_08f09cc', false);
}

include_once \dirname(__DIR__, 4).'/vendor/symfony/service-contracts/ServiceSubscriberInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/storefront/Controller/StorefrontController.php';
include_once \dirname(__DIR__, 4).'/vendor/shopware/storefront/Controller/ErrorController.php';
class ErrorController_b437ad9 extends \Shopware\Storefront\Controller\ErrorController implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderdc7c6 = null;
    private $initializerbd6a0 = null;
    private static $publicProperties77c5a = [
        
    ];
    public function error(\Throwable $exception, \Symfony\Component\HttpFoundation\Request $request, \Shopware\Core\System\SalesChannel\SalesChannelContext $context) : \Symfony\Component\HttpFoundation\Response
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'error', array('exception' => $exception, 'request' => $request, 'context' => $context), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->error($exception, $request, $context);
    }
    public function onCaptchaFailure(\Symfony\Component\Validator\ConstraintViolationList $violations, \Symfony\Component\HttpFoundation\Request $request) : \Symfony\Component\HttpFoundation\Response
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'onCaptchaFailure', array('violations' => $violations, 'request' => $request), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->onCaptchaFailure($violations, $request);
    }
    public function setTwig(\Twig\Environment $twig) : void
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'setTwig', array('twig' => $twig), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6->setTwig($twig);
return;
    }
    public function setContainer(\Psr\Container\ContainerInterface $container) : ?\Psr\Container\ContainerInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'setContainer', array('container' => $container), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->setContainer($container);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->errorTemplateResolver, $instance->container);
        \Closure::bind(function (\Shopware\Storefront\Controller\ErrorController $instance) {
            unset($instance->headerPageletLoader, $instance->errorPageLoader, $instance->systemConfigService, $instance->footerPageletLoader);
        }, $instance, 'Shopware\\Storefront\\Controller\\ErrorController')->__invoke($instance);
        \Closure::bind(function (\Shopware\Storefront\Controller\StorefrontController $instance) {
            unset($instance->twig);
        }, $instance, 'Shopware\\Storefront\\Controller\\StorefrontController')->__invoke($instance);
        $instance->initializerbd6a0 = $initializer;
        return $instance;
    }
    public function __construct(\Shopware\Storefront\Framework\Twig\ErrorTemplateResolver $errorTemplateResolver, \Shopware\Storefront\Pagelet\Header\HeaderPageletLoaderInterface $headerPageletLoader, \Shopware\Core\System\SystemConfig\SystemConfigService $systemConfigService, \Shopware\Storefront\Page\Navigation\Error\ErrorPageLoaderInterface $errorPageLoader, \Shopware\Storefront\Pagelet\Footer\FooterPageletLoaderInterface $footerPageletLoader)
    {
        static $reflection;
        if (! $this->valueHolderdc7c6) {
            $reflection = $reflection ?? new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
            $this->valueHolderdc7c6 = $reflection->newInstanceWithoutConstructor();
        unset($this->errorTemplateResolver, $this->container);
        \Closure::bind(function (\Shopware\Storefront\Controller\ErrorController $instance) {
            unset($instance->headerPageletLoader, $instance->errorPageLoader, $instance->systemConfigService, $instance->footerPageletLoader);
        }, $this, 'Shopware\\Storefront\\Controller\\ErrorController')->__invoke($this);
        \Closure::bind(function (\Shopware\Storefront\Controller\StorefrontController $instance) {
            unset($instance->twig);
        }, $this, 'Shopware\\Storefront\\Controller\\StorefrontController')->__invoke($this);
        }
        $this->valueHolderdc7c6->__construct($errorTemplateResolver, $headerPageletLoader, $systemConfigService, $errorPageLoader, $footerPageletLoader);
    }
    public function & __get($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__get', ['name' => $name], $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        if (isset(self::$publicProperties77c5a[$name])) {
            return $this->valueHolderdc7c6->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__isset', array('name' => $name), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__unset', array('name' => $name), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $realInstanceReflection = new \ReflectionClass('Shopware\\Storefront\\Controller\\ErrorController');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__clone', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6 = clone $this->valueHolderdc7c6;
    }
    public function __sleep()
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__sleep', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return array('valueHolderdc7c6');
    }
    public function __wakeup()
    {
        unset($this->errorTemplateResolver, $this->container);
        \Closure::bind(function (\Shopware\Storefront\Controller\ErrorController $instance) {
            unset($instance->headerPageletLoader, $instance->errorPageLoader, $instance->systemConfigService, $instance->footerPageletLoader);
        }, $this, 'Shopware\\Storefront\\Controller\\ErrorController')->__invoke($this);
        \Closure::bind(function (\Shopware\Storefront\Controller\StorefrontController $instance) {
            unset($instance->twig);
        }, $this, 'Shopware\\Storefront\\Controller\\StorefrontController')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbd6a0 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbd6a0;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'initializeProxy', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdc7c6;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdc7c6;
    }
}

if (!\class_exists('ErrorController_b437ad9', false)) {
    \class_alias(__NAMESPACE__.'\\ErrorController_b437ad9', 'ErrorController_b437ad9', false);
}

include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/psr/http-client/src/ClientInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/Client.php';
class Client_b190fb5 extends \GuzzleHttp\Client implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderdc7c6 = null;
    private $initializerbd6a0 = null;
    private static $publicProperties77c5a = [
        
    ];
    public function __call($method, $args)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__call', array('method' => $method, 'args' => $args), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->__call($method, $args);
    }
    public function sendAsync(\Psr\Http\Message\RequestInterface $request, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'sendAsync', array('request' => $request, 'options' => $options), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->sendAsync($request, $options);
    }
    public function send(\Psr\Http\Message\RequestInterface $request, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'send', array('request' => $request, 'options' => $options), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->send($request, $options);
    }
    public function sendRequest(\Psr\Http\Message\RequestInterface $request) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'sendRequest', array('request' => $request), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->sendRequest($request);
    }
    public function requestAsync(string $method, $uri = '', array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'requestAsync', array('method' => $method, 'uri' => $uri, 'options' => $options), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->requestAsync($method, $uri, $options);
    }
    public function request(string $method, $uri = '', array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'request', array('method' => $method, 'uri' => $uri, 'options' => $options), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->request($method, $uri, $options);
    }
    public function getConfig(?string $option = null)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getConfig', array('option' => $option), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getConfig($option);
    }
    public function get($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'get', array('uri' => $uri, 'options' => $options), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->get($uri, $options);
    }
    public function head($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'head', array('uri' => $uri, 'options' => $options), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->head($uri, $options);
    }
    public function put($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'put', array('uri' => $uri, 'options' => $options), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->put($uri, $options);
    }
    public function post($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'post', array('uri' => $uri, 'options' => $options), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->post($uri, $options);
    }
    public function patch($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'patch', array('uri' => $uri, 'options' => $options), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->patch($uri, $options);
    }
    public function delete($uri, array $options = []) : \Psr\Http\Message\ResponseInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'delete', array('uri' => $uri, 'options' => $options), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->delete($uri, $options);
    }
    public function getAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'getAsync', array('uri' => $uri, 'options' => $options), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->getAsync($uri, $options);
    }
    public function headAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'headAsync', array('uri' => $uri, 'options' => $options), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->headAsync($uri, $options);
    }
    public function putAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'putAsync', array('uri' => $uri, 'options' => $options), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->putAsync($uri, $options);
    }
    public function postAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'postAsync', array('uri' => $uri, 'options' => $options), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->postAsync($uri, $options);
    }
    public function patchAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'patchAsync', array('uri' => $uri, 'options' => $options), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->patchAsync($uri, $options);
    }
    public function deleteAsync($uri, array $options = []) : \GuzzleHttp\Promise\PromiseInterface
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'deleteAsync', array('uri' => $uri, 'options' => $options), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return $this->valueHolderdc7c6->deleteAsync($uri, $options);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\GuzzleHttp\Client $instance) {
            unset($instance->config);
        }, $instance, 'GuzzleHttp\\Client')->__invoke($instance);
        $instance->initializerbd6a0 = $initializer;
        return $instance;
    }
    public function __construct(array $config = [])
    {
        static $reflection;
        if (! $this->valueHolderdc7c6) {
            $reflection = $reflection ?? new \ReflectionClass('GuzzleHttp\\Client');
            $this->valueHolderdc7c6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\GuzzleHttp\Client $instance) {
            unset($instance->config);
        }, $this, 'GuzzleHttp\\Client')->__invoke($this);
        }
        $this->valueHolderdc7c6->__construct($config);
    }
    public function & __get($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__get', ['name' => $name], $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        if (isset(self::$publicProperties77c5a[$name])) {
            return $this->valueHolderdc7c6->$name;
        }
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__isset', array('name' => $name), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__unset', array('name' => $name), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $realInstanceReflection = new \ReflectionClass('GuzzleHttp\\Client');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc7c6;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderdc7c6;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__clone', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        $this->valueHolderdc7c6 = clone $this->valueHolderdc7c6;
    }
    public function __sleep()
    {
        $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, '__sleep', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
        return array('valueHolderdc7c6');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\GuzzleHttp\Client $instance) {
            unset($instance->config);
        }, $this, 'GuzzleHttp\\Client')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbd6a0 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbd6a0;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerbd6a0 && ($this->initializerbd6a0->__invoke($valueHolderdc7c6, $this, 'initializeProxy', array(), $this->initializerbd6a0) || 1) && $this->valueHolderdc7c6 = $valueHolderdc7c6;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdc7c6;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdc7c6;
    }
}

if (!\class_exists('Client_b190fb5', false)) {
    \class_alias(__NAMESPACE__.'\\Client_b190fb5', 'Client_b190fb5', false);
}
