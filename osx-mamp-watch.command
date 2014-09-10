#!/bin/bash
open -a mamp

DIR="$( dirname "${BASH_SOURCE[0]}" )"
cd "${DIR}"
gulp watch