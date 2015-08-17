<?php

/**
 * @SWG\Swagger(
 *     basePath="/api",
 *     host="http://104.131.144.192/slim-restful/",
 *     schemes={"http"},
 *     produces={"application/json"},
 *     consumes={"application/json"},
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="restful接口",
 *         description="使用swagger 生成的接口文檔",
 *         termsOfService="https://github.com/xxg3053/",
 *         @SWG\Contact(name="xxg3053@qq.com"),
 *         @SWG\License(name="License MIT")
 *     ),
 *     @SWG\Definition(
 *         definition="errorModel",
 *         required={"code", "message"},
 *         @SWG\Property(
 *             property="code",
 *             type="integer",
 *             format="int32"
 *         ),
 *         @SWG\Property(
 *             property="message",
 *             type="string"
 *         )
 *     )
 * )
 */
