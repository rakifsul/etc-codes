---
title: "Todo Inline HTML"
description: ""
date: 2025-05-30T04:43:14+07:00
draft: false
hidden: false
categories: ["General"]
tags: []
keywords: ["todo"]
author: ""
---

## Ini adalah Todo Inline HTML

Bisa, tapi tidak boleh ada baris kosong.

<!--more-->

<div class="container py-5">
    <form id="todoForm" class="mb-4">
        <div class="input-group">
        <input type="text" class="form-control" id="todoInput" placeholder="Tambahkan todo..." required />
        <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </form>
    <div id="todoList" class="row g-3">
    </div>
</div>
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/js/todo-inline-html.js"></script>