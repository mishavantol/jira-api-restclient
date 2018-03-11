<?php
/*
 * The MIT License
 *
 * Copyright (c) 2014 Shuhei Tanuma
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
namespace chobie\Jira;

/**
 * Class Comment
 */
class Comment
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $self;

    /**
     * @var array
     */
    private $author;

    /**
     * @var string
     */
    private $body;

    /**
     * @var array
     */
    private $updateAuthor;

    /**
     * @var \DateTimeImmutable
     */
    private $created;

    /**
     * @var \DateTimeImmutable
     */
    private $updated;

    /**
     * Comment constructor.
     *
     * @param array $comment
     */
    public function __construct(array $comment)
    {
        if (isset($comment['id'])) {
            $this->id = $comment['id'];
        }

        if (isset($comment['self'])) {
            $this->self = $comment['self'];
        }

        if (isset($comment['author'])) {
            $this->author = $comment['author'];
        }

        if (isset($comment['body'])) {
            $this->body = $comment['body'];
        }

        if (isset($comment['updateAuthor'])) {
            $this->updateAuthor = $comment['updateAuthor'];
        }

        if (isset($comment['created'])) {
            $this->created = new \DateTimeImmutable($comment['created']);
        }

        if (isset($comment['updated'])) {
            $this->updated = new \DateTimeImmutable($comment['updated']);
        }
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getSelf()
    {
        return $this->self;
    }

    /**
     * @return array
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @return array
     */
    public function getUpdateAuthor()
    {
        return $this->updateAuthor;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}